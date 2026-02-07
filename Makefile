all: notebook/adhesions.py notebook/baristas.py  notebook/recettes.py notebook/evenements.py pages
pages: web/generated/adhesions_01_adhesion_des_derniers_jours.html web/generated/adhesions_02_adhesion_par_mois.html web/generated/adhesions_03_adhesion_par_an.html web/generated/barista_01_creneaux_annules.html web/generated/barista_02_nb_baristas_par_an.html web/generated/barista_03_nb_services_realises_par_an.html web/generated/barista_04_nb_baristas_par_mois.html web/generated/barista_05_nb_services_réalisés_par_mois.html web/generated/barista_06_nb_referents_par_mois.html web/generated/barista_07_nb_services_ouverts.html web/generated/barista_08_nb_services_par_baristas_12_mois.html web/generated/evenements_01_events_par_semaine.html web/generated/evenements_02_events_mensuels_par_an.html web/generated/evenements_03_events_par_an.html web/generated/recettes_01_ca_par_categories_et_an.html web/generated/recettes_02_ca_par_produits_12_mois.html web/generated/recettes_03_ca_total_par_an.html web/generated/recettes_04_ca_quotidien_12_mois.html web/generated/recettes_06_benefice.html

notebook/adhesions.py: notebook/adhesions.ipynb
	jupyter nbconvert --to script $^
notebook/baristas.py: notebook/baristas.ipynb
	jupyter nbconvert --to script $^
notebook/recettes.py: notebook/recettes.ipynb
	jupyter nbconvert --to script $^
notebook/evenements.py: notebook/evenements.ipynb
	jupyter nbconvert --to script $^

web/generated/adhesions_01_adhesion_des_derniers_jours.html: notebook/adhesions.py zelty/zelty.csv events/barco_events_all.csv
	python notebook/adhesions.py
web/generated/adhesions_02_adhesion_par_mois.html: web/generated/adhesions_01_adhesion_des_derniers_jours.html
web/generated/adhesions_03_adhesion_par_an.html: web/generated/adhesions_01_adhesion_des_derniers_jours.html
web/generated/barista_01_creneaux_annules.html: notebook/baristas.py calendar/baristas.csv
	python notebook/baristas.py
web/generated/barista_02_nb_baristas_par_an.html: web/generated/barista_01_creneaux_annules.html
web/generated/barista_03_nb_services_realises_par_an.html: web/generated/barista_01_creneaux_annules.html
web/generated/barista_04_nb_baristas_par_mois.html: web/generated/barista_01_creneaux_annules.html
web/generated/barista_05_nb_services_réalisés_par_mois.html: web/generated/barista_01_creneaux_annules.html
web/generated/barista_06_nb_referents_par_mois.html: web/generated/barista_01_creneaux_annules.html
web/generated/barista_07_nb_services_ouverts.html: web/generated/barista_01_creneaux_annules.html
web/generated/barista_08_nb_services_par_baristas_12_mois.html: web/generated/barista_01_creneaux_annules.html
web/generated/evenements_01_events_par_semaine.html: notebook/evenements.py events/barco_events_all.csv
	python notebook/evenements.py
web/generated/evenements_02_events_mensuels_par_an.html: web/generated/evenements_01_events_par_semaine.html
web/generated/evenements_03_events_par_an.html: web/generated/evenements_01_events_par_semaine.html
web/generated/recettes_01_ca_par_categories_et_an.html: notebook/recettes.py zelty/zelty.csv events/barco_events_all.csv
	python notebook/recettes.py
web/generated/recettes_02_ca_par_produits_12_mois.html: web/generated/recettes_01_ca_par_categories_et_an.html
web/generated/recettes_03_ca_total_par_an.html: web/generated/recettes_01_ca_par_categories_et_an.html
web/generated/recettes_04_ca_quotidien_12_mois.html: web/generated/recettes_01_ca_par_categories_et_an.html
web/generated/recettes_06_benefice.html: web/generated/recettes_01_ca_par_categories_et_an.html

2017:
	LIMIT_YEAR=2017 python notebook/baristas.py
	LIMIT_YEAR=2017 python notebook/recettes.py
	LIMIT_YEAR=2017 python notebook/adhesions.py
	LIMIT_YEAR=2017 python notebook/evenements.py

2018:
	LIMIT_YEAR=2018 python notebook/baristas.py
	LIMIT_YEAR=2018 python notebook/recettes.py
	LIMIT_YEAR=2018 python notebook/adhesions.py
	LIMIT_YEAR=2018 python notebook/evenements.py

2019:
	LIMIT_YEAR=2019 python notebook/baristas.py
	LIMIT_YEAR=2019 python notebook/recettes.py
	LIMIT_YEAR=2019 python notebook/adhesions.py
	LIMIT_YEAR=2019 python notebook/evenements.py

2020:
	LIMIT_YEAR=2020 python notebook/baristas.py
	LIMIT_YEAR=2020 python notebook/recettes.py
	LIMIT_YEAR=2020 python notebook/adhesions.py
	LIMIT_YEAR=2020 python notebook/evenements.py

2021:
	LIMIT_YEAR=2021 python notebook/baristas.py
	LIMIT_YEAR=2021 python notebook/recettes.py
	LIMIT_YEAR=2021 python notebook/adhesions.py
	LIMIT_YEAR=2021 python notebook/evenements.py

2022:
	LIMIT_YEAR=2022 python notebook/baristas.py
	LIMIT_YEAR=2022 python notebook/recettes.py
	LIMIT_YEAR=2022 python notebook/adhesions.py
	LIMIT_YEAR=2022 python notebook/evenements.py

2023:
	LIMIT_YEAR=2023 python notebook/baristas.py
	LIMIT_YEAR=2023 python notebook/recettes.py
	LIMIT_YEAR=2023 python notebook/adhesions.py
	LIMIT_YEAR=2023 python notebook/evenements.py

2024:
	LIMIT_YEAR=2024 python notebook/baristas.py
	LIMIT_YEAR=2024 python notebook/recettes.py
	LIMIT_YEAR=2024 python notebook/adhesions.py
	LIMIT_YEAR=2024 python notebook/evenements.py

2025:
	LIMIT_YEAR=2025 python notebook/baristas.py
	LIMIT_YEAR=2025 python notebook/recettes.py
	LIMIT_YEAR=2025 python notebook/adhesions.py
	LIMIT_YEAR=2025 python notebook/evenements.py



annees: 2025 2024 2023 2022 2021 2020 2019 2018 2017

update:
	bash bin/zelty.sh
	bash bin/baristas.sh
	bash bin/maj_events.sh

clean:
	rm notebook/adhesions.py notebook/baristas.py notebook/recettes.py web/generated/*html
