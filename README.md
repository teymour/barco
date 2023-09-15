# Script pour le Bar Commun

## Installation

    apt install php python3-pandas python-plotly jq curl wget

## Génération des données et de l'interface

Pour générer les données :

    make update

Pour générer l'interface et les graph plotly

    make

## Zelty

Pour configurer : indiquer la clé de Baerer dans `bin/config.inc` :

    ZELTY_AUTH_BEARER="xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx=="

Pour générer les données :

    bash bin/zelty.sh

Le tableur généré se situe dans `zelty/zelty.csv` :

    date;order uuid;produit;price;category
    2017-10-12;00026c-1f90220c-000162-e0acf3;Myhra;3,5;Bière - bouteille
    2017-10-12;00026c-1f90207b-000161-06a9ef;Saint-Nectaire;3,0;Food - salé
    2017-10-12;00026c-1f90207b-000161-06a9ef;BL - Gournier Cevennes - Verre;2,0;Vin

## Activités

Connaître les nouveaux évènements publiés sur le site (par rapport à la dernière exécution) :

    bash bin/maj_events.sh

(utilisé pour publier sur des sites tiers genre agenda militant les évènements pertinents)

## Baristas

Pour configurer : indiquer l'url du google calendar avec l'argument key de l'ical calendrier des baristas dans `bin/config.inc` :

    GOOGLE_CAL_URL=https://client.google.com/calendar/v3/calendars/example@example.org/events&key=KEY

Pour générer les données :

    bash bin/baristas.sh

Le tableur généré se situe dans `calendar/baristas.csv` :

    mois;role;nom;telephone
    AAAA-MM-JJ;REFERENT;Prénom nom;XXXXXXXXX;
    AAAA-MM-JJ;REFERENT;Prénom nom;XXXXXXXXXX;
