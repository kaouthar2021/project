<?php

include "inc/init.inc.php";
if($_POST){
    extract($_POST);
    //on va vérifier que le formulaire est valide
    if(!empty($abonne_id) && !empty($livre_id)&& !empty($date_emprunt)){
        if(! is_numeric($abonne_id) && ! is_numeric($livre_id)){
            $_SESSION["message"] ="le formulaire n'est pas valide";
        }else{
            //si le formulaire est valide, on enregistre les données dans la bd
            $requete= $pdo->prepare("INSERT INTO emprunt (date_emprunt, date_retour,livre_id, abonne_id)
                                    VALUES (:emprunt, :retour,:livre,:abonne)");
            $requete->bindValue("emprunt",$date_emprunt);
           // $requete->bindValue("retour",$date_retour ? $date_retour:null);
            $requete->bindValue("retour",$date_retour ?? null); 
            //si la date_retour n'est pas null ,l'expression vaut $date_retour sinon elle vaut null

            $requete->bindValue("livre",$livre_id);
            $requete->bindValue("abonne",$abonne_id);
            $requete->execute();
            if($requete->rowCount() ==1){
                $_SESSION["message"] ="Le nouvel emprunt a été enregistrée";
                redirection("emprunt_liste.php");
            }else{
                $_SESSION["message"] = "Erreur lors de l'insertion de bd";
            }
        }
    }else{
        $_SESSION["message"] = "veuillez remplir ";
    }
}
$abonnes = selectAll("abonne");
$livres=selectAll("livre");
include "vues/header.html.php";
include "vues/emprunt/form.html.php";
include "vues/footer.html.php";
