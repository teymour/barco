<?php include('include/header.php'); ?>
	<div class="col-12">
	  <div class="card mb-4 rounded-3 shadow-sm">
		<div class="card-header py-3">
		  <h4 class="my-0 fw-normal text-center">Les services</h4>
		</div>
		<div class="card-body">
			<div class="row">
			  <h2>Nombre de créneaux annulés</h2>
			  <?php include("generated/baristas_01_creneaux_annules.html"); ?>
			  <p></p>
			</div>
			<div class="row">
				<h2>Nombre de barisats par an</h2>
				<?php include("generated/baristas_02_nb_baristas_par_an.html"); ?>
				<p></p>
			</div>
			<div class="row">
				<h2>Nombre de services réalisés par an</h2>
				<?php include("generated/baristas_03_nb_services_realises_par_an.html"); ?>
				<p></p>
			</div>
			<div class="row">
				<h2>Nombre de baristas par mois</h2>
				<?php include("generated/baristas_04_nb_baristas_par_mois.html"); ?>
				<p></p>
			</div>
			<div class="row">
				<h2>Nombre de services réalisés par mois</h2>
				<?php include("generated/baristas_05_nb_services_réalisés_par_mois.html"); ?>
				<p></p>
			</div>
			<div class="row">
				<h2>Nombre de référents par mois</h2>
				<?php include("generated/baristas_06_nb_referents_par_mois.html"); ?>
				<p></p>
			</div>
			<div class="row">
				<h2>Nombre de services ouverts par mois</h2>
				<?php include("generated/baristas_07_nb_services_ouverts.html"); ?>
				<p></p>
			</div>
			<div class="row">
				<h2>Nombre de services par baristas sur 12 mois</h2>
				<?php include("generated/baristas_08_nb_services_par_baristas_12_mois.html"); ?>
				<p></p>
			</div>
		    <div class="row">
			  <h2>Téléchargements</h2>
		  </div>
	  	</div>
	  </div>
	</div>
<?php include('include/footer.php');
