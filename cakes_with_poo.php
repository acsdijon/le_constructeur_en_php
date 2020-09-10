<?php

  // On commence par créer une classe Gateau afin de pouvoir construire nos différents gâteaux qui vont être des objets de la class Gateau

Class Gateau {
  // On déclare ici les différents attributs de notre classe : (les différentes caractéristiques de notre gateau)
  public $nom;
  public $parfum;
  public $forme;
  public $ingrédients = [];



  // On construit une instance de l'objet avec le constructeur

  public function __construct($nom,$parfum,$forme,$ingrédients){
      $this->nom = $nom;
      $this->parfum = $parfum;
      $this->forme = $forme;
      $this->ingrédients = $ingrédients;
  }

  // On fait des assesseurs (= getters) pour retourner les attributs de l'objet

  function get_nom() {
    return $this->nom;
  }

  function get_parfum() {
    return $this->parfum;
  }

  function get_forme() {
    return $this->forme;
  }

  function get_ingredients() {
    return $this->ingrédients;
  }





}





 ?>
