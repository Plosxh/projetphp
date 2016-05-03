<?php
require_once('Produit.php');
require_once('ProduitDAO.php');



$produit = new ProduitDAO();

$m = $produit->insert(0,"123","adidas","blblbl","test",12,13,0);
var_dump($m);

 ?>
