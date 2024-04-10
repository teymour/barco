<?php $prefix=''; if (isset($_GET['annee'])){$prefix=$_GET['annee'].'_';} ?>
<?php $htmlargs=''; if (isset($_GET['annee'])){$htmlargs="?annee=".$_GET['annee'];} ?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="fr"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Tableau de bord du Bar Commun</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="js/plotly-2.18.0.min.js"></script>
    <script src="js/plotly-locale-fr.js"></script>
    <script>Plotly.setPlotConfig({locale: 'fr',displaylogo: false})</script>
    <style>
        .graphcard{
            padding-bottom: 70px;
        }
        .explication {
            max-width: 50em;
            margin: auto;
        }
    </style>
  <body>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="." class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <img src="./img/barcommun_logo.png" height="40" width="40"/>
        <span class="px-2 fs-4">Le Bar Commun</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="https://lebarcommun.fr/">Site du bar</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="https://www.lebarcommun.fr/events/">Agenda</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="https://www.lebarcommun.fr/bieres_bouteilles/">Les bières</a>
        <a class="py-2 link-body-emphasis text-decoration-none" href="./">Les chiffres</a>
      </nav>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis"><a href="index.php" class="link-underline link-underline-opacity-0 link-dark">Tableaux de bord</a></h1>
      <p class="fs-5 text-body-secondary">Des données pour suivre l'activité du bar commun</p>
    </div>
  </header>

  <main>
