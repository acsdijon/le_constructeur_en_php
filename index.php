<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Le constructeur en php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <section class="container mb-5 mt-5">
      <h2 class="text-white"><span class="bg-success pl-2 pr-2">Le constructeur</span></h2>
      <div>
        <h3>Comment créer un constructeur</h3>
        <div class="border border-dark pt-2 pb-2 rounded ml-3">
          <code>
            class Fruit {
              public $name;
              public $color;

              function __construct($name) {
                $this->name = $name;
              }
              function get_name() {
                return $this->name;
              }
            }

            $apple = new Fruit("Apple");
            echo $apple->get_name();
          </code>
        </div>
        <h3 class="mt-4">A quoi ça sert ?</h3>
        <p class="ml-3">Principalement à initialiser les propriétés d'un objet de la classe</p>
        <div>
          <h3 class="mt-4">Examples</h3>
          <div class="row pb-5">
            <div class="col-lg-6">
              <a href="cakes_without_poo.php" target="_blank"><button type="button" class="btn btn-warning">Gâteaux sans POO</button></a>
            </div>
            <div class="col-lg-6">
              <a href="set_cakes.php" target="_blank"><button type="button" class="btn btn-warning">Gâteaux avec POO & Constructeur</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="container mb-5 mt-5">
      <h2 class="text-white"><span class="bg-danger pl-2 pr-2"> Points à retenir</span></h2>
      <div class="ml-3">
        <ul>
          <li>Le constructeur permet d'initialiser les propriétés de l'objet avant même la création de l'objet</li>
          <li>Le constructeur est une recette, un moule qui permet de créer un objet d'une classe. <em> => on dit que l'on crée une instance de classe</em></li>
          <li>Il nous permet de définir les caractéristiques de notre instance de class (les attributs)</li>
          <li>Le constructeur n'est pas obligatoire</li>
          <li>Il faut toujours mettre le constructeur en public pour qu'il soit accessible</li>
        </ul>
      </div>
    </section>

    <section class="container mb-5 mt-5">
      <div class="row">
        <h2 class="text-white"><span class="bg-info pl-2 pr-2">Aller plus loin</span></h2>
        <div class="col-lg-4">
          <a href="https://yazgaroth.wordpress.com/2013/05/07/les-classes-en-php/" target="_blank"><button type="button" class="btn btn-dark">Les classes en php (cours complet)</button></a>
        </div>
        <div class="col-lg-4">
          <a href="https://www.php.net/manual/fr/language.oop5.decon.php#object.construct" target="_blank"><button type="button" class="btn btn-dark">Le manuel php</button></a>
        </div>
        <div class="col-lg-4">
          <a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1666060-utiliser-la-classe" target="_blank"><button type="button" class="btn btn-dark">Openclassrooms</button></a>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  </body>
</html>
