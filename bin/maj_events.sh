#!/bin/bash

cd $(dirname $0)/../events

for (( annee = 2021 ; annee <= $(date '+%Y') ; annee++ )) ; do
	for i in 01 02 03 04 05 06 07 08 09 10 11 12; do
		if ! test -f "events_"$annee'-'$i".ical" ; then
			curl -s "https://www.lebarcommun.fr/events/mois/"$annee'-'$i"/?ical=1" > "events_"$annee'-'$i".ical"
		fi
		if test $annee'-'$i'-31' '>' $(date '+%Y-%m-%d') ; then
			break 2;
		fi
	done
done

cat "events_"*".ical" | grep -E '^URL|^SUMMARY|^DTSTART|^BEGIN:VEVENT' | tr -d '\r' | tr -d '\n' | sed 's/BEGIN/\n/g' | grep ':VEVENT' | sed 's/URL:/;/' | sed 's/SUMMARY:/;/' | sed 's/:VEVENTDTSTART;TZID=Europe.Paris://' | sed 's/^\([0-9][0-9][0-9][0-9]\)\([0-9][0-9]\)\([0-9][0-9]\)T\([0-9][0-9]\)\([0-9][0-9]\)/\1-\2-\3 \4:\5:/' > barco_events_last.csv

rm "events_"$annee'-'$i".ical"

sed -i 's/"//g' barco_events_last.csv barco_events_all.csv

touch barco_events_all.csv
diff barco_events_last.csv barco_events_all.csv | grep '^<'

cat barco_events_last.csv barco_events_all.csv | sort -u > barco_events_all.csv.tmp
mv barco_events_all.csv.tmp barco_events_all.csv
