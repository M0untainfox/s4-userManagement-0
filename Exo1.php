<?php
namespace ETU2_41;
require_once "pdo.php";
$db = new Database();
echo"
<fieldset>
	<form name='formCour' action='' method='post'>
  <table style='border-collapse: collapse;'>
<tr>
<th>Nom</th>
<th>NbUsers</th>
<th>Actions</th>
</tr>";

$sql1 = $db->tailleRole();

  foreach($sql1 as $res)
    {
      for ($i = 1; $i <= $res['val']; $i++) {

        echo("<tr style='border: 2px solid black;'>");





      $sql2 = $db->afficheRole($i);
      $sql3 = $db->NomRole($i);

      foreach($sql3 as $val)
      {

          echo  ("<td ><center>".$val['name']."</center></td>");


        }


      foreach($sql2 as $cour)
      {

        //  echo  ("<b>ID:".$cour['id']."  NOM:". $cour['firstname']." PRENOM:".$cour['lastname']."</b>");
          echo  ("<td style='border: 1px solid black;'><center>".$cour['val']."</center></td>");

        }

        echo("<td ><center><input type='submit' name='".$i."' value='supprimer' id='".$i."' ></center></td>");

        echo("</tr>");
      //SQL1
      }

      }
      echo("</table>
      </form>");



      foreach($sql1 as $res)
        {
          for ($i = 1; $i <= $res['val']; $i++) {
            if (isset($_POST[$i])){

                $sql2 = $db->afficheRole($i);

                foreach($sql2 as $val)
                {
                   if($val['val']==0){
                     $sql2 = $db->effaRole($i);
                     echo("supprimer");
                   }
                  else{
                    echo("suppression impossible il y a :".$val['val']." membres dans ce groupe");
                  }
                  }

                  }




            }

        }
?>
