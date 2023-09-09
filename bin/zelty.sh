#!/bin/bash

waittime=10


cd $(dirname $0)/../zelty

if ! test -f ../bin/config.inc; then
	echo "bin/config.inc missing";
	exit 2;
fi
source ../bin/config.inc

for (( i = 1 ; i < 2150 ; i )) ; do
	for (( y = 0 ; y < 7 ; y++ )) ; do
		day=$(date --iso -d "-"$i" day");
		if ! test -f $day".json"  ; then
			echo $day;
			curl -H "Authorization: Bearer "$ZELTY_AUTH_BEARER 'https://api.zelty.fr/2.7/orders?from='$day'T00:00:00&to='$day'T00:00:00&expand[]=items&expand[]=price&expand[]=transactions&expand[]=transactions.method' > $day".json" ;
			downloaded=1
		fi
		if ! test -s $day".json" ||  grep 'Too many requests' $day".json" ; then
			rm $day".json" ;
			sleep $waittime ;
			(( waittime = waittime * 2));
		else
			(( i ++ )) ;
		fi
	done
	if test "$downloaded"; then
		sleep 5 ;
	fi
	waittime=10
	downloaded=""
done
ls *json | while read json ; do
	csv=$(echo $json | sed 's/json/csv/')
	if ! test -s $csv; then
		python ../bin/zelty2csv.py $json > $csv
	fi
done

echo "date;order uuid;produit;price;category" > zelty.csv
ls 20*csv | while read csv ; do
	tail -n +2 $csv | grep '[0-9]'
done >> zelty.csv
#missing data
for missing in 2020-03 2020-04 2020-05 2020-11 2020-12 2021-01 2021-02 2021-03 2021-04 2021-08; do
	echo $missing"-01;000000-00000000-00000000-00000000;Bière;0;Bière - pression"
done >> zelty.csv
