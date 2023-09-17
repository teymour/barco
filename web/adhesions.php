<?php include('include/header.php'); ?>
	<div class="col-12">
	  <div class="card mb-4 rounded-3 shadow-sm">
		<div class="card-header py-3">
		  <h4 class="my-0 fw-normal text-center">Les adhésions</h4>
		</div>
		<div class="card-body">
		  <div class="row cardgraph">
			<h2 id="Adhésions_les_derniers_jours">Adhésions les derniers jours <a href="#Adhésions_les_derniers_jours" class="btn-link text-secondary opacity-25" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
			<center>
			<div class="graph">
			<?php include("generated/adhesions_01_adhesion_des_derniers_jours.html"); ?>
			</div>
			<p class="explication">Nombre d'adhésions payées par jour sur 30 jours glissant</p>
			<p class="text-muted">Données : zelty</p>
			</center>
		  </div>
		  <div class="row cardgraph">
			<h2 id="Adhésions_par_mois">Adhésions par mois <a href="#Adhésions_par_mois" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
			<center>
			<div class="graph">
			<?php include("generated/adhesions_02_adhesion_par_mois.html"); ?>
			</div>
			<p class="explication">Nombre d'adhésions payées par mois. Les couleurs représentent les différentes années</p>
			<p class="text-muted">Données : zelty</p>
			</center>
		</div>
		<div class="row graphcard">
		  <h2 id="Adhésions_par_an">Adhésions par an <a href="#Adhésions_par_an" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
		  	<center>
			<div class="graph">
			<?php include("generated/adhesions_03_adhesion_par_an.html"); ?>
			</div>
			<p class="explication">Nombre d'adhésions payées par an pour chaque année civile (rouge), comparé aux nombres d'adhésions payées entre le 1er janvier et le dernier jour d'ouverture du bar pour chaque année civile (bleu).</p>
			<p class="text-muted">Données : zelty</p>
			</center>
		</div>
		<div class="row graphcard">
		  <h2 id="Téléchargements">Téléchargements <a href="#Téléchargements" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
		  <ul class="px-5">
			  <li><a href="data/zelty.csv">Tableur de l'ensemble des produits vendus sur Zelty (format csv)</a></li>
		  </ul>
	  	</div>
	  </div>
<div class="card-footer text-body-secondary">
	<div class="px-5 float-begin">
	<a href="index.php" class="btn btn-primary">&lt;&lt Retour à la synthèse</a>
	</div>

<?php include('include/footer.php');
