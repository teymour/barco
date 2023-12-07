#!/bin/bash

waittime=10


cd $(dirname $0)/../zelty

if ! test -f ../bin/config.inc; then
	echo "bin/config.inc missing";
	exit 2;
fi
source ../bin/config.inc

if ! test "$ZELTY_DAYS"; then
	ZELTY_DAYS=2150
fi
touch /tmp/zelty.$$
for (( i = 1 ; i < $ZELTY_DAYS ; i )) ; do
	for (( y = 0 ; y < 7 ; y++ )) ; do
		day=$(date --iso -d "-"$i" day");
		offset="000"
		while true ; do
			if ! test -f $day"_"$offset".json"  ; then
				curl -s -H "Authorization: Bearer "$ZELTY_AUTH_BEARER 'https://api.zelty.fr/2.7/orders?from='$day'&to='$day'&expand[]=items&expand[]=price&expand[]=transactions&expand[]=transactions.method&limit=100&offset='$offset > $day"_"$offset".json" ;
				downloaded=1
			fi
			if ! test -s $day"_"$offset".json" ||  grep 'Too many requests' $day"_"$offset".json" ; then
				rm $day"_"$offset".json" ;
				sleep $waittime ;
				(( waittime = waittime * 2));
				continue;
			fi
			count=$( jq . < $day"_"$offset".json" | grep '"date"' | wc -l)
			if test 0 = "$count" ; then
				(( i ++ )) ;
				break 2;
			else
				(( offset = offset + $count )) ;
			fi
		done
	done
	if test "$downloaded"; then
		sleep 5 ;
	fi
	waittime=10
	downloaded=""
done

find . -newer /tmp/zelty.$$ -name '*json' | while read json ; do
	csv=$(echo $json | sed 's/json/csv/')
	if ! test -s $csv; then
		python ../bin/zelty2csv.py $json > $csv
	fi
done
rm /tmp/zelty.$$

echo "date;order uuid;pid;produit;price;tva;category" > zelty.csv
ls 20*csv | while read csv ; do
	tail -n +2 $csv | grep '[0-9]'
done >> zelty.csv
#missing data
for missing in 2020-03 2020-04 2020-05 2020-11 2020-12 2021-01 2021-02 2021-03 2021-04 2021-08; do
	echo $missing"-01;000000-00000000-00000000-00000000;0;Bière;0;0;Bière - pression"
done >> zelty.csv
