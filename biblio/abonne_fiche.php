<?php

include_once "inc/init.inc.php";
 echo "<h1>Fiche d'abonne</h1>";
if( !empty($_GET["id"])){
    $id= $_GET["id"];
 //$requete=$pdo->query("SELECT * FROM  abonne WHERE id =$id");
 //$abonne =$requete->fetch(PDO::FETCH_ASSOC);
 $abonne=selectByID($id,"abonne");
 if ( $abonne ){
    include "vues/header.html.php";
    include "vues/abonne/fiche.html.php";
    include "vues/footer.html.php";

 }else{
     
     $_SESSION["message"]="Erreur404:le livre n°$id n'existe pes";
     redirection("index.php");
     
 }

}else{
    $_SESSION["message"]="Erreur404:la page demandée n'existe pes";
    redirection("index.php");
}
 