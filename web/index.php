<?php include('include/header.php'); ?>

    <div class="row mb-3 text-center">
      <div class="col-12">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Les adhésions</h4>
          </div>
          <div class="card-body">
              <?php include('generated/adhesions_01_adhesion_des_derniers_jours.html'); ?>
              <p>Le nombre d'adhésions quotidiennes sur les 30 derniers jours</p>
          </div>
          <div class="card-footer text-body-secondary">
              <a href="adhesions.php">Plus de stats sur les adhésions</a>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Les évènements</h4>
          </div>
          <div class="card-body">
              <?php include('generated/evenements_01_events_par_semaine.html'); ?>
              <p>Le nombre d'évènements par semaine</p>
          </div>
          <div class="card-footer text-body-secondary">
              <a href="evenements.php">Plus de stats sur les évènements</a>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Les services</h4>
          </div>
          <div class="card-body">
              <?php include('generated/baristas_05_nb_services_réalisés_par_mois.html'); ?>
              <p>Le nombre de services par mois</p>
          </div>
          <div class="card-footer text-body-secondary">
              <a href="services.php">Plus de stats sur les services</a>
          </div>
        </div>
      </div>

      <div class="col-12">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Les Recettes</h4>
          </div>
          <div class="card-body">
              <?php include('generated/recettes_03_ca_total_par_an.html'); ?>
              <p>Les recettes annuelles</p>
          </div>
          <div class="card-footer text-body-secondary">
              <a href="recettes.php">Plus de stats sur les recettes</a>
          </div>
        </div>
      </div>

    </div>
<?php include('include/footer.php');
