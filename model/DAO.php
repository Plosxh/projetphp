<?php


class DAO{
  private $db;

  function insert($id,$code,$marque,$urlImage,$description,$prix,$poids,$note){
    $req = "insert into produit(id,code,marque,urlimage,description,prix,poids,note) values ("+$id+","+$code+","+$marque+","+$urlImage+","+$description+","+$prix+","+$poids+","+$note+');';
    $sth = $this->db->exec($req);
  }

  function __construct(){
    $this->db = new PDO('sqlite:../data/bd/produit.bd');
  }

  function rechercheMarque($cat){
    $r = $this->db->query("SELECT * FROM produit WHERE marque='$cat'");
    $res = $r->fetchall();
    for ($i=0; $i <count($res) ; $i++) {
      $produit = new Produit($res[$i]);
      var_dump(count($res));
      var_dump($produit);
      $resultat[$i]=$produit;
    }
    return $resultat;

  }

  function rechercheType($type){
    $r = $this->db->query("SELECT * FROM produit WHERE idGroupe='$type'");
    $res = $r->fetchall();
    for ($i=0; $i <count($res) ; $i++) {
      $produit = new Produit($res[$i]);
      var_dump(count($res));
      var_dump($produit);
      $resultat[$i]=$produit;
    }
    return $resultat;

  }

  function rechercheID($id){
    $r = $this->db->query("SELECT * FROM produit WHERE id='$id'");

    $res= $r->fetchall();
    $produit = new Produit($res[0]);
    //var_dump($produit);
    return $produit;

  }

  function modifierProduit($item,$id,$idGroupe,$nom,$code,$marque,$urlimage,$description,$prix,$poids,$note){
    if($id !=null){

    $produit = $item->rechercheID($id);
    var_dump($produit);
    if($produit != null)
      {
        if($idGroupe != null)
          {
            $produit->idGroupe = $idGroupe;
            $r = $this->db->query("UPDATE idGroupe FROM produit WHERE id='$id'");
          }
        elseif ($nom != null)
          {
            $produit->nom = $nom;
          }
        elseif ($code != null)
          {
            $produit->code = $code;
          }
        elseif ($marque != null)
          {
            $produit->marque = $marque;
          }
        elseif ($urlimage != null)
          {
            $produit->urlimage = $urlimage;
          }
        elseif ($description != null)
          {
            $produit->description = $description;
          }
        elseif ($prix!=null)
          {
            $produit->prix = $prix;
          }
        elseif ($poids!=null)
          {
            $produit->poids = $poids;
          }
        elseif ($note!=null)
          {
            $produit->note = $note;
          }
        var_dump($produit);
      }
    }
  }
}

?>
