<?php include('include/header.php'); ?>
	<div class="col-12">
	  <div class="card mb-4 rounded-3 shadow-sm">
		<div class="card-header py-3">
		  <h4 class="my-0 fw-normal text-center">Les adhésions</h4>
		</div>
		<div class="card-body">
		  <div class="row">
			<h2>Adhésions les derniers jours</h2>
			<?php include("generated/adhesions_01_adhesion_des_derniers_jours.html"); ?>
			<p></p>
		  </div>
		  <div class="row">
			<h2>Adhésions par mois</h2>
			<?php include("generated/adhesions_02_adhesion_par_mois.html"); ?>
			<p></p>
		</div>
		<div class="row">
		  <h2>Adhésions par ans</h2>
			<?php include("generated/adhesions_03_adhesion_par_an.html"); ?>
			<p></p>
		</div>
		<div class="row">
		  <h2>Téléchargements</h2>
	  	</div>
	  </div>
	</div>
<?php include('include/footer.php');
