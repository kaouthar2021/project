<?php
 include_once "inc/init.inc.php";
 echo "<h1>Fiche du livre</h1>";
if( !empty($_GET["id"])){
    $id= $_GET["id"];
 $requete=$pdo->query("SELECT * FROM  livre WHERE id =$id");
  $livre =$requete->fetch(PDO::FETCH_ASSOC);
// $livre=selectByID("livre",$id);
 if ( $livre ){
    include "vues/header.html.php";
    include "vues/livre/fiche.html.php";
    include "vues/footer.html.php";

 }else{
     
     $_SESSION["message"]="Erreur404:le livre n°$id n'existe pes";
     redirection("index.php");
     
 }

}else{
    $_SESSION["message"]="Erreur404:la page demandée n'existe pes";
    redirection("index.php");
}
 


