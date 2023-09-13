<?php include('include/header.php'); ?>

    <div class="row mb-3 text-center">
      <div class="col-12">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Les adhésions <span class="text-muted">quotidiennes</span></h4>
          </div>
          <div class="card-body">
              <?php include('generated/adhesions_01_adhesion_des_derniers_jours.html'); ?>
              <p>Le nombre d'adhésions quotidiennes sur les 30 derniers jours</p>
              <p class="text-muted">Données issues de zelty</p>
          </div>
          <div class="card-footer text-body-primary">
              <div class="px-5 float-end">
                  <a href="adhesions.php" class="btn btn-primary">Voir plus de stats sur les adhésions &gt;&gt;</a>
              </div>
          </div>
        </div>
      </div>

      <div class="card-footer text-body-secondary">
      </div>

      <div class="col-12">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Les évènements <span class="text-muted">hebdomadaires</span></h4>
          </div>
          <div class="card-body">
              <?php include('generated/evenements_01_events_par_semaine.html'); ?>
              <p>Le nombre d'évènements par semaine</p>
              <p class="text-muted">Données issues du site du <a href="https://www.lebarcommun.fr/events/">bar commun</a></p>
          </div>
          <div class="card-footer text-body-secondary">
              <div class="px-5 float-end">
              <a href="evenements.php" class="btn btn-primary">Voir plus de stats sur les évènements &gt;&gt;</a>
              </div>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Les services <span class="text-muted">mensuels</span></h4>
          </div>
          <div class="card-body">
              <?php include('generated/baristas_05_nb_services_réalisés_par_mois.html'); ?>
              <p>Le nombre de services réalisés par mois. (Pour un créneau, 1 référent et 2 baristas = 3 services réalisés)</p>
              <p class="text-muted">Données issues du calendrier partagé des services</p>
          </div>
          <div class="card-footer text-body-secondary">
              <div class="px-5 float-end">
              <a href="services.php" class="btn btn-primary">Voir plus de stats sur les services &gt;&gt;</a>
              </div>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Les Recettes <span class="text-muted">annuelles</span></h4>
          </div>
          <div class="card-body">
              <?php include('generated/recettes_03_ca_total_par_an.html'); ?>
              <p>Les recettes annuelles et recette "à date" en euro</p>
              <p class="text-muted">Données issues de Zelty</p>
          </div>
          <div class="card-footer text-body-secondary">
              <div class="px-5 float-end">
              <a href="recettes.php" class="btn btn-primary">Voir plus de stats sur les recettes &gt;&gt;</a>
              </div>
          </div>
        </div>
      </div>

    </div>
<?php include('include/footer.php');
