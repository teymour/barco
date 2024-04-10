<?php include('include/header.php'); ?>
	<div class="col-12">
	  <div class="card mb-4 rounded-3 shadow-sm">
		<div class="card-header py-3">
		  <h4 class="my-0 fw-normal text-center">Les services</h4>
		</div>
		<div class="card-body">
			<div class="row graphcard">
				<h2 id="Nombre_de_services_ouverts_par_mois">Nombre de créneaux ouverts par mois <a href="#Nombre_de_services_ouverts_par_mois" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				<center>
				<div class="graph">
				<?php include("generated/".$prefix."baristas_07_nb_services_ouverts.html"); ?>
				</div>
				<p class="explication">Nombre de créneaux ouverts par mois</p>
  			  	<p class="text-muted">Données : agenda partagé des services</p>
  			  	</center>
			</div>
			<div class="row graphcard">
			  <h2 id="Nombre_de_créneaux_annulés">Nombre de créneaux annulés <a href="#Nombre_de_créneaux_annulés" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
			  <center>
			  <div class="graph">
			  <?php include("generated/".$prefix."baristas_01_creneaux_annules.html"); ?>
		  	  </div>
			  <p class="explication">Nombre de créneaux annulés par mois</p>
			  <p class="text-muted">Données : agenda partagé des services</p>
			  </center>
			</div>
			<div class="row graphcard">
			  <h2 id="Nombre_de_créneaux_annulés_semaine">Créneaux : Moments les plus annulés <a href="#Nombre_de_créneaux_annulés_semaine" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
			  <center>
			  <div class="graph">
			  <?php include("generated/".$prefix."baristas_11_creneaux_annules_semaine.html"); ?>
		  	  </div>
			  <p class="explication">Nombre de créneaux annulés par moment de la semaine sur les 6 derniers mois</p>
			  <p class="text-muted">Données : agenda partagé des services</p>
			  </center>
			</div>
			<div class="row graphcard">
				<h2 id="Nombre_de_baristas_par_an">Nombre de baristas par an <a href="#Nombre_de_baristas_par_an" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				<center>
				<div class="graph">
				<?php include("generated/".$prefix."baristas_02_nb_baristas_par_an.html"); ?>
				</div>
				<p class="explication">Nombre de baristas ayant fait au moins un service sur l'année civile pour chaque année</p>
				<p class="text-muted">Données : agenda partagé des services</p>
				</center>
			</div>
			<div class="row graphcard">
				<h2 id="Nombre_de_baristas_par_mois">Nombre de baristas par mois <a href="#Nombre_de_baristas_par_mois" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				<center>
				<div class="graph">
				<?php include("generated/".$prefix."baristas_04_nb_baristas_par_mois.html"); ?>
				</div>
				<p class="explication">Nombre de baristas ayant fait au moins un service sur le mois. Chaque couleur représente une année.</p>
				<p class="text-muted">Données : agenda partagé des services</p>
				</center>
			</div>
			<div class="row graphcard">
				<h2 id="Nombre_de_services_réalisés_par_an">Nombre de services réalisés par an <a href="#Nombre_de_services_réalisés_par_an" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				<center>
				<div class="graph">
				<?php include("generated/".$prefix."baristas_03_nb_services_realises_par_an.html"); ?>
				</div>
				<p class="explication">Nombre de services réalisés par an. (Un créneaux avec un référence et deux baristas = 3 services réalisés)</p>
  			  	<p class="text-muted">Données : agenda partagé des services</p>
  			  	</center>
			</div>
			<div class="row graphcard">
				<h2 id="Nombre_de_services_réalisés_par_mois">Nombre de services réalisés par mois <a href="#Nombre_de_services_réalisés_par_mois" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				<center>
				<div class="graph">
				<?php include("generated/".$prefix."baristas_05_nb_services_réalisés_par_mois.html"); ?>
				</div>
				<p class="explication">Nombre de services réalisés par mois. (Un créneaux avec un référence et deux baristas = 3 services réalisés). Chaque couleur représente une année.</p>
  			  	<p class="text-muted">Données : agenda partagé des services</p>
  			  	</center>
			</div>
			<div class="row graphcard">
				<h2 id="Nombre_de_référents_par_mois">Nombre de référents par mois <a href="#Nombre_de_référents_par_mois" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				<center>
				<div class="graph">
				<?php include("generated/".$prefix."baristas_06_nb_referents_par_mois.html"); ?>
				</div>
				<p class="explication">Nombre de référents ayant fait au moins un service dans le mois. Chaque couleur représente une année.</p>
  			  	<p class="text-muted">Données : agenda partagé des services</p>
  			  	</center>
			</div>
			<div class="row graphcard">
				<h2 id="Nombre_de_services_par_baristas_sur_12_mois">Nombre de services par baristas sur 12 mois <a href="#Nombre_de_services_par_baristas_sur_12_mois" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				<center>
				<div class="graph">
				<?php include("generated/".$prefix."baristas_08_nb_services_par_baristas_12_mois.html"); ?>
				</div>
				<p class="explication">Nombre de services réalisés par baristas/référents sur 12 mois. Trié par nombre de service.
  			  	<p class="text-muted">Données : agenda partagé des services</p>
  			  	</center>
			</div>
		    <div class="row graphcard">
			  <h2 id="Téléchargements">Téléchargements <a href="#Téléchargements" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
			  <ul class="px-5">
				  <li><a href="data/baristas.csv">Tableur des services (format csv)</a></li>
			  </ul>
		  </div>
  	  </div>
  <div class="card-footer text-body-secondary">
  	<div class="px-5 float-begin">
  	<a href="index.php" class="btn btn-primary">&lt;&lt Retour à la synthèse</a>
  	</div>
<?php include('include/footer.php');
