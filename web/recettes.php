<?php include('include/header.php'); ?>
	<div class="col-12">
	  <div class="card mb-4 rounded-3 shadow-sm">
		<div class="card-header py-3">
		  <h4 class="my-0 fw-normal text-center">Les recettes</h4>
		</div>
		<div class="card-body">
				<div class="row">
  				  <h2>Bénéfice mensuel</h2>
  				<?php include('generated/recettes_06_benefice.html'); ?>
  				<p></p>
  			  </div>
			  <div class="row">
				  <h2>Recettes totales par an</h2>
				<?php include('generated/recettes_03_ca_total_par_an.html'); ?>
				<p></p>
			  </div>
			  <div class="row">
			  <h2>Recettes annuelles par catégories</h2>
				<?php include('generated/recettes_01_ca_par_categories_et_an.html'); ?>
				<p></p>
			  </div>
			  <div class="row">
				  <h2>Recettes mensuelles par produits sur 12 mois</h2>
				<?php include('generated/recettes_02_ca_par_produits_12_mois.html'); ?>
				<p></p>
			  </div>
			  <div class="row">
				  <h2>Meilleures recette sur 12 mois</h2>
				<?php include('generated/recettes_05_ca_quotidien_top50_12_mois.html'); ?>
				<p></p>
			  </div>
			  <div class="row">
				  <h2>Téléchargement</h2>
			  </div>
		</div>
	  </div>
	</div>
<?php include('include/footer.php');
