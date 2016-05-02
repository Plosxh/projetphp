<?php
Class MusicDAO{
  private $db;

  function get($id){
    $req = "SELECT * FROM music WHERE ID='$id'";
    $sth = $this->db->query($req);
    $result = $sth->fetchAll();
    //var_dump($result);
    $music = new Music($result[0]);
    /*var_dump($music);
    exit(0);*/
    return $music;
  }
  function __construct(){
    $this->db = new PDO('sqlite:music.bd');
  }
}

$tes = new MusicDAO();
tes.get(1);
?>
