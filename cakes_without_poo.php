<?php

$gateauChocolat = [
  "nom" => "Gâteau au chocolat",
  "parfum" => "chocolat",
  "forme" => "ronde",
  "ingrédients" =>[
    "oeufs" => 4,
    "farine" => "100g",
    "beurre" => "50g",
    "sucre" => "70g"
  ]
];

$fraisier = [
  "nom" => "Fraisier",
  "parfum" => "fraise",
  "forme" => "rectangle",
  "ingrédients" =>[
    "oeufs" => 2,
    "farine" => "70g",
    "beurre" => "100g",
    "sucre" => "80g"
  ]
];

$parisBrest = [
  "nom" => "Paris Brest",
  "parfum" => "pralinée aux amandes",
  "forme" => "donut",
  "ingrédients" =>[
    "oeufs" => 2,
    "farine" => "50g",
    "beurre" => "150g",
    "sucre" => "100g"
  ]
];

 ?>

 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Gâteaux sans POO</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
   </head>
   <body>
     <section class="container mt-5">
       <h2 class="text-uppercase text-center pb-3">Les gâteaux sans poo</h2>
       <div class="row">
         <div class="col-lg-4">
           <div class="card" style="width: 18rem;">
              <img src="images/chocolat.jpeg" class="card-img-top" alt="cho chocolat chaud cacao">
              <div class="card-body">
                <h5 class="card-title"><?php echo $gateauChocolat["nom"]; ?></h5>
                  <p class="card-text"> Parfum : <?php echo $gateauChocolat["parfum"]; ?> & Forme : <?php echo $gateauChocolat["forme"]; ?></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"> Oeufs : <?php echo $gateauChocolat["ingrédients"]["oeufs"]; ?></li>
                <li class="list-group-item">Farine : <?php echo $gateauChocolat["ingrédients"]["farine"]; ?></li>
                <li class="list-group-item">Beurre : <?php echo $gateauChocolat["ingrédients"]["beurre"]; ?> </li>
                <li class="list-group-item">Sucre : <?php echo $gateauChocolat["ingrédients"]["sucre"]; ?></li>
              </ul>
            </div>
         </div>
         <div class="col-lg-4">
           <div class="card" style="width: 18rem;">
              <img src="images/fraisier.jpeg" class="card-img-top" alt="fraisier">
              <div class="card-body">
                <h5 class="card-title"><?php echo $fraisier["nom"]; ?></h5>
                <p class="card-text">Parfum : <?php echo $fraisier["parfum"]; ?> & Forme : <?php echo $fraisier["forme"]; ?></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"> Oeufs : <?php echo $fraisier["ingrédients"]["oeufs"]; ?></li>
                <li class="list-group-item">Farine : <?php echo $fraisier["ingrédients"]["farine"]; ?></li>
                <li class="list-group-item">Beurre : <?php echo $fraisier["ingrédients"]["beurre"]; ?> </li>
                <li class="list-group-item">Sucre : <?php echo $fraisier["ingrédients"]["sucre"]; ?></li>
              </ul>
            </div>
         </div>
         <div class="col-lg-4">
           <div class="card" style="width: 18rem;">
              <img src="images/paris_brest.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $parisBrest["nom"]; ?></h5>
                <p class="card-text">Parfum : <?php echo $parisBrest["parfum"]; ?> & Forme : <?php echo $parisBrest["forme"]; ?></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"> Oeufs : <?php echo $parisBrest["ingrédients"]["oeufs"]; ?></li>
                <li class="list-group-item">Farine : <?php echo $parisBrest["ingrédients"]["farine"]; ?></li>
                <li class="list-group-item">Beurre : <?php echo $parisBrest["ingrédients"]["beurre"]; ?> </li>
                <li class="list-group-item">Sucre : <?php echo $parisBrest["ingrédients"]["sucre"]; ?></li>
              </ul>
            </div>
         </div>
       </div>
     </section>

   </body>
 </html>
