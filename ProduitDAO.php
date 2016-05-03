<?php

class ProduitDAO{
  private $db;

  function insert($id,$code,$marque,$urlImage,$description,$prix,$poids,$note){
    $req = "insert into produit values (".$id.",".$code.",".$marque.",".$urlImage.",".$description.",".$prix.",".$poids.",".$note.');';
    var_dump($req);
    $sth = $this->db->query($req);

  }
  function __construct(){
    $this->db = new PDO('sqlite:../data/bd/produit.bd');
  }
}

?>
