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

update:
	bash bin/zelty.sh
	bash bin/baristas.sh
	bash bin/maj_events.sh

clean:
	rm notebook/adhesions.py notebook/baristas.py notebook/recettes.py web/generated/*html
