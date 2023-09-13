<?php include('include/header.php'); ?>
	<div class="col-12">
	  <div class="card mb-4 rounded-3 shadow-sm">
		<div class="card-header py-3">
		  <h4 class="my-0 fw-normal text-center">Les recettes</h4>
		</div>
		<div class="card-body">
				<div class="row graphcard">
  				  <h2 id="Bénéfice_mensuel">Bénéfice mensuel <a href="#Bénéfice_mensuel" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				  <center>
					  <div class="graph">
  				  <?php include('generated/recettes_06_benefice.html'); ?>
			  	</div>
				  <p>Bénéfice mensuel calculé par la somme des ventes mensuelles moins la marge commerciale annualisée (<a href="https://github.com/teymour/barco/blame/master/notebook/recettes.ipynb#L155-L161">détails</a>),<br/> moins la moyenne mensuelle des charges fixes annuelles (<a href="https://github.com/teymour/barco/blame/master/notebook/recettes.ipynb#L171-L177">détails</a>), moins la tva</p>
  			  	  <p class="text-muted">Données issues de Zelty</a>
  			  	  </center>
  			  </div>
			  <div class="row graphcard">
				  <h2 id="Recettes_totales_par_an">Recettes totales par an <a href="#Recettes_totales_par_an" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				  <center>
					  <div class="graph">
				  <?php include('generated/recettes_03_ca_total_par_an.html'); ?>
			  	</div>
				  <p>Recette totales en euros par an et à date (du premier janvier au dernier jour d'ouverture du bar de cette année) pour chaque année</p>
				  <p class="text-muted">Données issues de Zelty</a>
				  </center>
			  </div>
			  <div class="row graphcard">
			  <h2 id="Recettes_annuelles_par_catégories">Recettes annuelles par catégories <a href="#Recettes_annuelles_par_catégories" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
			    <center>
					<div class="graph">
				<?php include('generated/recettes_01_ca_par_categories_et_an.html'); ?>
				</div>
				<p>Recettes annuelles en euros par catégories de produit.<br/>Dans la légende, le simple click permet de désélectionner/sélectionner une catégorie ;<br/>le double click permet d'exclure toutes les catégories sauf celle concernée par le double click.</p>
				<p class="text-muted">Données issues de Zelty</a>
				</center>
			  </div>
			  <div class="row graphcard">
				<h2 id="Recettes_mensuelles_par_produits_sur_12_mois">Recettes mensuelles par produits sur 12 mois <a href="#Recettes_mensuelles_par_produits_sur_12_mois" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				<center>
				<div class="graph">
				<?php include('generated/recettes_02_ca_par_produits_12_mois.html'); ?>
				</div>
				<p>Recettes mensuelles en euros par produits.<br/>Dans la légende, le simple click permet de désélectionner/sélectionner un produit ;<br/>le double click permet d'exclure tous le produit sauf celui concerné par le click.</p>
				<p class="text-muted">Données issues de Zelty</a>
				</center>
			  </div>
			  <div class="row graphcard">
				<h2 id="Meilleures_recettes_sur_12_mois">Meilleures recettes sur 12 mois <a href="#Meilleures_recettes_sur_12_mois" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				<center>
				<div class="">
				<?php include('generated/recettes_05_ca_quotidien_top50_12_mois.html'); ?>
				</div>
				<p>Top 30 des meilleures recettes quotidiennes sur 12 mois glissants.</p>
				<p class="text-muted">Données issues de Zelty</a>
				</center>
			  </div>
			  <div class="row graphcard">
				  <h2 id="Téléchargement">Téléchargement <a href="#Téléchargement" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				  <ul class="px-5">
					  <li><a href="data/zelty.csv">Tableur des ventes de produits provenant de zelty (format csv)</a></li>
				  </ul>
			  </div>
	  	  </div>
	  <div class="card-footer text-body-secondary">
	  	<div class="px-5 float-begin">
	  	<a href="index.php" class="btn btn-primary">&lt;&lt Retour à la synthèse</a>
	  	</div>
<?php include('include/footer.php');
