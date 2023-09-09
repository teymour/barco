#!/bin/bash

cd $(dirname $0)/..

curl -s "https://www.lebarcommun.fr/events/liste/?ical=1" > events/last_barco_events.ical
cat events/last_barco_events.ical | grep -E '^URL|^SUMMARY|^DTSTART|^BEGIN:VEVENT' | tr -d '\r' | tr -d '\n' | sed 's/BEGIN/\n/g' | grep ':VEVENT' | sed 's/URL:/;/' | sed 's/SUMMARY:/;/' | sed 's/:VEVENTDTSTART;TZID=Europe.Paris://' | sed 's/^\([0-9][0-9][0-9][0-9]\)\([0-9][0-9]\)\([0-9][0-9]\)T\([0-9][0-9]\)\([0-9][0-9]\)/\1-\2-\3 \4:\5:/' > events/last_barco_events.csv

touch events/all_barco_events.csv
diff events/last_barco_events.csv events/all_barco_events.csv | grep '^<'

cat events/last_barco_events.csv events/all_barco_events.csv | sort -u > events/all_barco_events.csv.tmp
mv events/all_barco_events.csv.tmp events/all_barco_events.csv
