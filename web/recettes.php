<?php include('include/header.php'); ?>
	<div class="col-12">
	  <div class="card mb-4 rounded-3 shadow-sm">
		<div class="card-header py-3">
		  <h4 class="my-0 fw-normal text-center">Les recettes<?php echo $annee ; ?></h4>
		</div>
		<div class="card-body">
				<div class="row graphcard">
  				  <h2 id="Bénéfice_mensuel">Évaluation du bénéfice mensuel <a href="#Bénéfice_mensuel" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				  <center>
					  <div class="graph">
  				  <?php include('generated/'.$prefix.'recettes_06_benefice.html'); ?>
			  	</div>
				  <p class="explication">Bénéfice mensuel calculé par la somme des ventes mensuelles moins la marge commerciale annualisée (<a href="https://github.com/teymour/barco/blob/master/notebook/recettes.ipynb?short_path=519607e#L235-L243">détails</a>), moins la tva</p>
  			  	  <p class="text-muted">Données : Zelty, <a href="https://drive.google.com/file/d/1e5FBeAKf_Nd8M4X3DkPBnE-u3Oc332Be/view">rapport financier 2022</a> et <a href="https://drive.google.com/file/d/1WaKuL7ZqgIsmStzPALoVjKgcIRJSeLTx/view">2023</a></p>
  			  	  </center>
  			  </div>
			  <div class="row graphcard">
				  <h2 id="Recettes_totales_par_an">Recettes totales par an <a href="#Recettes_totales_par_an" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				  <center>
					  <div class="graph">
				  <?php include('generated/'.$prefix.'recettes_03_ca_total_par_an.html'); ?>
			  	</div>
				  <p class="explication">Recette totales en euros par an et à date (du premier janvier au dernier jour d'ouverture du bar de cette année) pour chaque année</p>
				  <p class="text-muted">Données : Zelty</p>
				  </center>
			  </div>
			  <div class="row graphcard">
			  <h2 id="Recettes_annuelles_par_catégories">Recettes annuelles par catégories <a href="#Recettes_annuelles_par_catégories" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
			    <center>
					<div class="graph">
				<?php include('generated/'.$prefix.'recettes_01_ca_par_categories_et_an.html'); ?>
				</div>
				<p class="explication">Recettes annuelles en euros par catégories de produit. Dans la légende, le simple click permet de désélectionner/sélectionner une catégorie&nbsp;; le double click permet d'exclure toutes les catégories sauf celle concernée par le double click.</p>
				<p class="text-muted">Données : Zelty</p>
				</center>
			  </div>
			  <div class="row graphcard">
				<h2 id="Recettes_mensuelles_par_produits_sur_12_mois">Recettes mensuelles par produits sur 12 mois <a href="#Recettes_mensuelles_par_produits_sur_12_mois" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				<center>
				<div class="graph">
				<?php include('generated/'.$prefix.'recettes_02_ca_par_produits_12_mois.html'); ?>
				</div>
				<p class="explication">Recettes mensuelles en euros par produits. Dans la légende, le simple click permet de désélectionner/sélectionner un produit&nbsp;; le double click permet d'exclure tous le produit sauf celui concerné par le click.</p>
				<p class="text-muted">Données : Zelty</p>
				</center>
			  </div>
			  <div class="row graphcard">
				<h2 id="Meilleures_recettes_sur_12_mois">Meilleures recettes sur 12 mois <a href="#Meilleures_recettes_sur_12_mois" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
				<center>
				<div class="graph">
				<?php include('generated/'.$prefix.'recettes_05_ca_quotidien_top50_12_mois.html'); ?>
				</div>
				<p class="explication">Top 50 des meilleures recettes quotidiennes sur 12 mois glissants (en rouge les recettes des 30 derniers jours)</p>
				<p class="text-muted">Données : Zelty</p>
				</center>
			  </div>

                          <div class="row graphcard">
                                <h2 id="Recette_2_mois">Recette quotidienne sur les 2 derniers mois <a href="#Recette_2_mois" class="btn-link text-secondary opacity-25"><small>#</small></a></h2>
                                <center>
                                <div class="graph">
                                <?php include('generated/'.$prefix.'recettes_04_ca_quotidien_2_mois.html'); ?>
                                </div>
                                <p class="explication">Recettes quotidiennes sur les 2 derniers mois (barre horizontale représente le montant quotidien de recette nécessaire pour atteindre le point mort, le fait que toutes les charges sont payées)</p>
                                <p class="text-muted">Données : Zelty</p>
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
	  	<a href="index.php<?php echo $htmlargs; ?>" class="btn btn-primary">&lt;&lt Retour à la synthèse</a>
	  	</div>
<?php include('include/footer.php');
