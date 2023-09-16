<?php include('include/header.php'); ?>
	<div class="col-12">
	  <div class="card mb-4 rounded-3 shadow-sm">
		<div class="card-header py-3">
		  <h4 class="my-0 fw-normal text-center">Les évènements</h4>
		</div>
		<div class="card-body">
		  <div class="row graphcard">
  			<h2 id="Les_évènements_par_semaine">Les évènements par semaine <a href="#Les_évènements_par_semaine" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
			<center>
			<div class="graph">
			<?php include("generated/evenements_01_events_par_semaine.html"); ?>
			</div>
			<p class="explication">Le nombre d'évènements par semaine</p>
			<p class="text-muted">Données issues du site du <a href="https://www.lebarcommun.fr/events/">bar commun</a></p>
			</center>
		  </div>
		  <div class="row graphcard">
  			<h2 id="Les_évènements_sur_l'année">Les évènements sur l'année <a href="#Les_évènements_sur_l" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
			<center>
			<div class="graph">
			<?php include("generated/evenements_02_events_mensuels_par_an.html"); ?>
			</div>
			<p class="explication">Le nombre d'évènements par mois sur 12 mois glissant</p>
			<p class="text-muted">Données issues du site du <a href="https://www.lebarcommun.fr/events/">bar commun</a></p>
			</center>
		</div>
		<div class="row graphcard">
		  <h2 id="Les_évènements_par_semaine">Les évènements par an <a href="#Les_évènements_par_semaine" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
		  	<center>
			<div class="graph">
			<?php include("generated/evenements_03_events_par_an.html"); ?>
			</div>
			<p class="explication">Le nombre d'évènements par an</p>
			<p class="text-muted">Données issues du site du <a href="https://www.lebarcommun.fr/events/">bar commun</a></p>
			</center>
		</div>
		<div class="row graphcard">
		  <h2 id="Téléchargements">Téléchargements <a href="#Téléchargements" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
		  <ul class="px-5">
			  <li><a href="data/evenements.csv">Tableur des évènements depuis octobre 2021 (format csv)</a></li>
		  </ul>
	  </div>
	</div>
<div class="card-footer text-body-secondary">
  <div class="px-5 float-begin">
  <a href="index.php" class="btn btn-primary">&lt;&lt Retour à la synthèse</a>
  </div>
<?php include('include/footer.php');
