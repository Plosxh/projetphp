<?php
Class Produit{
public $id;
public $code;
public $marque;
public $urlImage;
public $description;
public $prix;
public $poids;
public $note;

function __construct($array){
  $this->id = $array[0];
  $this->code =$array[1];
  $this->marque= $array[2];
  $this->urlImage = $array[3];
  $this->description = $array[4];
  $this->prix = $array[5];
  $this->poids = $array[6];
  $this->note = $array[7];

}

function ajouterProduit() {

  $id = htmlspecialchars($_POST["id"]);
  $code = htmlspecialchars($_POST["code"]);
  $marque = htmlspecialchars($_POST["marque"]);
  $urlImage = htmlspecialchars($_POST["url"]);
  $description = htmlspecialchars($_POST["description"]);
  $prix = htmlspecialchars($_POST["prix"]);
  $poids = htmlspecialchars($_POST["poids"]);
  $note = htmlspecialchars($_POST["note"]);
  }

}

 ?>
