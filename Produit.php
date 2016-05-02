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

  
}

 ?>
