<?php

include "inc/init.inc.php";
if($_POST){
    extract($_POST);
    if(!empty($titre)&& !empty($auteur)){
        $requete= $pdo->prepare("INSERT INTO livre (titre,auteur)
                                VALUES (:titre, :auteur)");
                            
        $requete->bindValue("titre",$titre);
        $requete->bindValue("auteur",$auteur);
        $resultat =$requete->execute();//execute () renvoie un booléen
        if($resultat){
            $_SESSION["message"] = "le nouveau livre a  bien été enregistré";
            redirection("livre_liste.php");
        } else{
            $_SESSION["message"] = "Erreur lors de l'insertion";
        }    
    }
}
include "vues/header.html.php";
include "vues/livre/form.html.php";
include "vues/footer.html.php";
