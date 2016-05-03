<?php

class ProduitDAO{
  private $db;

  function insert($id,$code,$marque,$urlImage,$description,$prix,$poids,$note){
    $req = "insert into produit(id,code,marque,urlimage,description,prix,poids,note) values ("+$id+","+$code+","+$marque+","+$urlImage+","+$description+","+$prix+","+$poids+","+$note+');';
    $sth = $this->db->query($req);
  }
  function __construct(){
    $this->db = new PDO('sqlite:produit.bd');
  }
}

?>
