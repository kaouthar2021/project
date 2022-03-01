<?php
include "inc/init.inc.php";
 include "vues/header.html.php";
 if(!empty ($_GET["id"])){
     $id = $_GET["id"];
     $requete = $pdo->query("SELECT*FROM livre WHERE id=$id");
     //$requete=selectByID($id,"livre");
     if($requete){//signifie $reqeute n'est pas vide
        $livre = $requete->fetch(PDO::FETCH_ASSOC);
        if($livre){ //soit $livre est un array non vide soit $livre est un booléen qui vaut false
            if($_POST){
                extract($_POST);
                if(!empty($titre) && !empty($auteur)){ //la fonction prepare est utile quand il ya plusieurs champ a modifier
                    //pour ne pas repeter la modification plusieurs fois
                    //on utilise la fonction prepare dans un boucle
                    $requete = $pdo->prepare ("UPDATE livre 
                                              SET titre = :titre, auteur = :auteur
                                              WHERE id = :id ");
                    $requete->bindValue("titre",$titre);
                    $requete->bindValue("auteur",$auteur);
                    $requete->bindValue("id",$id);
                    $resultat = $requete->execute();//$resultat est un booléen
                }if($resultat){
                    $_SESSION["message"] = "Les modifications ont été enregistrées";
                }else{
                    $_SESSION["message"] ="Erreur lors de la modification";
                }
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
 }


 //AFFICHAGE
 include "vues/livre/form.html.php";
 include "vues/footer.html.php";