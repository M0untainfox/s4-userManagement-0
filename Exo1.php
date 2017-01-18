<?php
namespace ETU2_41;
require_once "pdo.php";
$db = new Database();


$sql1 = $db->tailleRole();

  foreach($sql1 as $res)
    {
      for ($i = 1; $i <= $res['val']; $i++) {







      $sql2 = $db->afficheRole($i);
      $sql3 = $db->NomRole($i);

      foreach($sql3 as $val)
      {
          echo("</br>");
          echo  ("Nom: ".$val['name']);


        }


      foreach($sql2 as $cour)
      {
          echo("</br>");
        //  echo  ("<b>ID:".$cour['id']."  NOM:". $cour['firstname']." PRENOM:".$cour['lastname']."</b>");
          echo  ("Il y a : ".$cour['val']." membres");

        }
        echo("</br>");



      //SQL1
      }

      }

?>
