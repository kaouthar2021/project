<?php
include "inc/init.inc.php";

if(!empty ($_GET["id"])){
    $id = $_GET["id"];
    $requete = $pdo->query("SELECT*FROM livre WHERE id=$id");
    if($requete){//signifie $reqeute n'est pas vide
       $livre = $requete->fetch(PDO::FETCH_ASSOC);
       if($livre){ //soit $livre est un array non vide soit $livre est un booléen qui vaut false
           if($_SERVER["REQUEST_METHOD"] == "POST"){
               $resultat = $pdo->exec("DELETE FROM livre WHERE id=$id");
               
               if($resultat){
                   $_SESSION["message"] = "Le livre a été supprimé";
               }else{
                   $_SESSION["message"] ="Erreur lors de la suppression";
               }
               redirection("livre_liste.php");
           }

       }else{
           $_SESSION["message"] = "Erreur 404 :il n'ya pas de livre avec cet identifiant";
           redirection("livre_liste.php");

       }
    }else{
           $_SESSION["message"] = "Erreur 404 :il n'ya pas de livre avec cet identifiant";
           redirection("livre_liste.php");

       }

}else{
    $_SESSION["message"] = "Erreur 404 :la page n'existe pas";
    redirection("livre_liste.php");
}
include "vues/header.html.php";

include "vues/livre/confirmation.html.php";
 include "vues/footer.html.php";
