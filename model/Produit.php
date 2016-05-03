<?php
Class Produit{
public $id;
public $idGroupe;
public $nom;
public $code;
public $marque;
public $urlImage;
public $description;
public $prix;
public $poids;
public $note;

function __construct($array){
  $this->id = $array[0];
  $this->idGroupe = $array[1];
  $this->nom = $array[2];
  $this->code =$array[3];
  $this->marque= $array[4];
  $this->urlImage = $array[5];
  $this->description = $array[6];
  $this->prix = $array[7];
  $this->poids = $array[8];
  $this->note = $array[9];

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
