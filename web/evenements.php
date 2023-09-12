<?php include('include/header.php'); ?>
	<div class="col-12">
	  <div class="card mb-4 rounded-3 shadow-sm">
		<div class="card-header py-3">
		  <h4 class="my-0 fw-normal text-center">Les évènements</h4>
		</div>
		<div class="card-body">
		  <div class="row">
  			<h2>Les évènements par semaine</h2>
			<?php include("generated/evenements_01_events_par_semaine.html"); ?>
			<p></p>
		  </div>
		  <div class="row">
  			<h2>Les évènements par semaine</h2>
			<?php include("generated/evenements_02_events_mensuels_par_an.html"); ?>
			<p></p>
		</div>
		<div class="row">
		  <h2>Les évènements par semaine</h2>
			<?php include("generated/evenements_03_events_par_an.html"); ?>
			<p></p>
		</div>
		<div class="row">
		  <h2>Téléchargements</h2>
	  	</div>
	  </div>
	</div>
<?php include('include/footer.php');
