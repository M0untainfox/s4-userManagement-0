<?php
namespace ETU2_41;
require_once "pdo.php";
$db = new Database();


$sql = $db->afficheuser();

foreach($sql as $cour)
  {




      echo  ("<b>ID:".$cour['id']."  NOM:". $cour['firstname']." PRENOM:".$cour['lastname']."</b>");
      echo("</br>");

  }



?>
