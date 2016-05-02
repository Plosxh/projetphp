<?php
function get($id){
  $req = "SELECT * FROM music WHERE ID='$id'";
  $sth = $this->db->query($req);
  $result = $sth->fetchAll();
  var_dump($result);
  $music = new Music($result[0]);
  /*var_dump($music);
  exit(0);*/
  return 1;
}


get(1);
?>
