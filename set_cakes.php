<?php require 'cakes_with_poo.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Le constructeur en php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <?php
    $chocolat = new Gateau("Gâteau au chocolat","chocolat","ronde",[
      "oeufs" => 4,
      "farine" => "100g",
      "beurre" => "50g",
      "sucre" => "70g"
    ]);

    $fraisier = new Gateau("Fraisier","fraise","rectangle",[
      "oeufs" => 2,
      "farine" => "70g",
      "beurre" => "100g",
      "sucre" => "80g"
    ]);

    $parisBrest = new Gateau("Paris Brest","pralinée aux amandes","donut",[
      "oeufs" => 2,
      "farine" => "50g",
      "beurre" => "150g",
      "sucre" => "100g"
    ]);



     ?>

     <section class="container mt-5">
       <h2 class="text-uppercase text-center pb-3">Les gâteaux avec poo &amp; constructeur </h2>
       <div class="row">
         <div class="col-lg-4">
           <div class="card" style="width: 18rem;">
              <img src="images/chocolat.jpeg" class="card-img-top" alt="cho chocolat chaud cacao">
              <div class="card-body">
                <h5 class="card-title"><?php   echo $chocolat->get_nom(); ?></h5>
                  <p class="card-text"> Parfum : <?php echo $chocolat->get_parfum(); ?> & Forme : <?php   echo $chocolat->get_forme(); ?></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"> Oeufs : <?php echo '';?></li>
                <li class="list-group-item">Farine : <?php echo '' ;?></li>
                <li class="list-group-item">Beurre : <?php echo '' ;?> </li>
                <li class="list-group-item">Sucre : <?php echo '' ;?></li>
              </ul>
            </div>
         </div>






  </body>
  </html>
