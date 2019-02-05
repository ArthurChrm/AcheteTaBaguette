<?php

function afficherEntete($page = null){

    if(!is_object($page)) return;

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        <?= $page->titre ?? ""; ?>
    </title>
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="css/normalize.css" rel="stylesheet" media="all">
    <link href="css/styles.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!--[if lt IE 9]><script src="js/html5shiv-printshiv.js" media="all">
    </script><![endif]-->

</head>
<body>
  <header>
     <!-- Banderole du site avec logo, titre, slogan -->
     <div class="row align-items-center">

           <!-- logo -->
           <div class="col-md-2">
              <img
              src="..\achetetabaguette_fr - publique\illustration\baguette.jpg"
              alt="produit"
              class="img-fluid imageProduit"
              />
           </div>

           <!-- Titre et slogan-->
           <div class="col-md-8 text-center">
              <div class="row">
                 <div class="col-md-12">
                       <h1><strong>Achète Ta Baguette</strong></h1>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-12">
                       <h4>50cm de pure plaisir</h4>
                 </div>
              </div>
           </div>
     </div>

     <!-- menu -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
           <a class="navbar-brand" href="#">Accueil</a>

           <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav mr-auto">
                 <li class="nav-item">
                       <a class="nav-link" href="#">Baguette</a>
                 </li>
                 <li class="nav-item">
                       <a class="nav-link" href="#">Viénoiseries</a>
                 </li>
                 <li class="nav-item">
                       <a class="nav-link" href="#">Autre</a>
                 </li>
                 <li class="nav-item">
                       <a class="nav-link" href="#">À propos</a>
                 </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                 <input class="form-control mr-sm-2" type="text" placeholder="Search">
                 <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
              </form>
           </div>
     </nav>

     <!-- Fil d'Ariane -->
     <ol class="breadcrumb">
           <li class="breadcrumb-item active">Accueil</li>
     </ol>
  </header>

    <?php

}