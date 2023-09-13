#!/bin/bash

cd $(dirname $0)/../calendar

if ! test -f ../bin/config.inc; then
	echo "bin/config.inc missing";
	exit 2;
fi
source ../bin/config.inc

for (( annee = 2017 ; annee <= $(date '+%Y') ; annee++ )) ; do

	for i in 01 02 03 04 05 06 07 08 09 10 11 ; do
		y=$(echo $i | awk '{printf("%02d", $1 + 1)}'; ) ;
		if ! test -s 'events_'$annee'-'$y'-01.ical' ; then
			wget -q $GOOGLE_CAL_URL_WITH_KEY'&calendarId=services.lebarcommun%40gmail.com&singleEvents=true&timeZone=GMT%2B2%3A0&maxAttendees=1&maxResults=500&sanitizeHtml=true&timeMin='$annee'-'$i'-01T00%3A00%3A00%2B02%3A00&timeMax='$annee'-'$y'-01T00%3A00%3A00%2B02%3A00' ;
		fi
		if test $annee'-'$i'-31' '>' $(date '+%Y-%m-%d') ; then
			break 2;
		fi
	done
	(( anneeplus1 = annee +1 )) ;
	if ! test -s 'events_'$annee'-12-01.ical' && test "$y" = 12 ; then
		wget -q $GOOGLE_CAL_URL_WITH_KEY'&calendarId=services.lebarcommun%40gmail.com&singleEvents=true&timeZone=GMT%2B2%3A0&maxAttendees=1&maxResults=500&sanitizeHtml=true&timeMin='$annee'-12-01T00%3A00%3A00%2B02%3A00&timeMax='$anneeplus1'-01-01T00%3A00%3A00%2B02%3A00' ;
	fi
	if test $annee'-12-31' '>' $(date '+%Y-%m-%d') ; then
		break 1;
	fi
done

rename -f 's/events.*timeMin=/events_/' event*
rename -f 's/T.*/.ical/' event*

rm -f *services.lebarcommun* *01T00:00:00*

#jq -c '.items|.[]|[.location, .start.dateTime]'

ls event*ical | while read ical ; do
	csv=$(echo "$ical" | sed 's/ical/csv/')
	if ! test -f "$csv" ; then
	jq .items[] < "$ical" | jq -c '[.start.dateTime,.location]' | grep 'REFERENT\|ANNU' | while read line ; do
		date=$(echo $line | awk -F '"' '{print $2}')
		echo $line | awk -F '"' '{print $4}' |
	  sed 's/ *\/ */\n/g' |
#	  grep -v RENFORT |
	  sed "s/\\\\*'/'/g" |
	  sed 's/\\t/ /g' |
	  sed 's/ ‭/ /g' |
	  sed 's/BARISTA/\nBARISTA/g' |
	  sed 's/\(BARIST1\|BARSITA\)/\nBARISTA/g' |
	  sed 's/REFERENT/\nREFERENT/g' |
	  sed 's/\([a-z]\)0/\1 0/ig' |
	  sed 's/+00/+/g' |
	  sed 's/+\([1-589][0-9]\) */00\1/g' |
	  sed 's/ \(+\|et\) /\n/g' |
	  sed 's/ *+ */\n/g' |
	  sed 's/[\(\)]/ /g' |
	  sed 's/  */ /g' |
	  sed 's/[^ ]*@[^ ]*//g' |
	  sed 's/ *n° *tel *//' |
	  sed 's/ *\(jusqu\|à partir\| de 1\).*//' |
	  sed 's/ *[^ ]*premier service\( 2\)*[^ ]* */ /i' |
	  sed 's/ *[^ ]*[1er2nd]* service[^ ]* */ /i' |
	  sed 's/REFERENT RENFORT/RENFORT/i' |
	  sed 's/REFERENT[ES]* */REFERENT /' |
	  sed 's/REFERENT [0-9 :]*/REFERENT;/' |
	  sed 's/BARISTA [0-9 :]*/BARISTA;/i' |
	  sed 's/RENFORT [0-9 :]*/RENFORT;/i' |
	  sed 's/[éèêë]/e/g' |
	  sed 's/É/E/g' |
	  sed 's/E : //' |
	  sed 's/.* ANNULE *.*/CRENEAU ANNULE/' |
	  sed 's/ï/i/g' |
	  sed 's/-/ /g' |
	  sed 's/\( undefined\|: XXX\)//' |
#	  sed 's/ *(*[0+67][0-9 ]*.*//' |
	  sed 's/^[0-9(]* *//' |
	  sed 's/\([0-9]\)[ .]\([0-9]\)/\1\2/g' |
	  sed 's/\([0-9]\) [^0-9].*/\1/g' |
	  sed 's/ [0-9][0-9]*h[0-9]*/ /g' |
	  sed 's/ [0-9]*h[0-9]* / /g' |
	  sed 's/  */ /g' |
	  sed 's/ h$//' |
	  sed 's/[ \.]*$//' |
	  sed 's/ \(6[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]\)/ 0\1/' |
	  sed 's/ 00336/ 06/' |
	  sed 's/ 00337/ 07/' |
	  sed 's/ 00330 7/ 07/' |
	  sed 's/ 0/;0/' |
	  grep -i '[a-z]' |
	  awk -F ';' 'BEGIN{OFS=";"}{$4 = "" ; if ($1 !~ /REFERENT/ && $1 !~ /BARISTA/ && $1 !~ /RENFORT/ && $1 !~ /CRENEAU/) print "BARISTA;"$0  ; else print $0 ; }' |
	  sed 's/l;$/;/' |
	  grep -vi '\(;\|^\)\(nom\|tel\|num\|n°\)' | sed 's/^/'$date';/'
  done > "$csv"
fi
done

echo 'date;role;nom;telephone' > baristas.csv
cat e*csv | iconv -f UTF8 -t UTF8//IGNORE >> baristas.csv

sed -i 's/;$//' baristas.csv
sed -i 's/;;$/;/' baristas.csv
sed -i 's/\([0-9]\)[^0-9;]*;$/\1/' baristas.csv

rm -f 'events_'$annee'-'$y'-01.ical'
