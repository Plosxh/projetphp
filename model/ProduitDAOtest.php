<?php
require_once('Produit.php');
require_once('ProduitDAO.php');



$produit = new DAO();
$test = "adidas";
$id = 1;
$idGroupe =2;
$nom = "bla";
$code ="plz";
$marque="nike";
$urlimage="LUR";
$description = "kermesse";
$prix =8;
$poids=12;
$note = 2;

//$m = $produit->modifierProduit($produit,$id,$idGroupe,$nom,$code,$marque,$urlimage,$description,$prix,$poids,$note);
//$m = $produit->rechercheID($id);
//var_dump($m);

$m = $produit->insert($id,$idGroupe,$nom,$code,$marque,$urlimage,$description,$prix,$poids,$note);
var_dump($m);

 ?>
