<?php
    include "vues/header.html.php";
    include "inc/init.inc.php";

    if ( $_POST){
        extract($_POST);
        if(!empty($pseudo) && !empty($mdp)){
            /*
            $requete = $pdo->prepare("SELECT * FROM abonne WHERE pseudo = :param_pseudo AND mdp = :param_mdp ");
            $requete->bindValue("param_pseudo",$pseudo);
            $requete->bindValue("param_mdp",$mdp);
            $requete->execute();
            $abonne= $requete->fetch(PDO::FETCH_ASSOC);
            if($abonne){
                $_SESSION["abonne"]= $abonne; //cette ligne fait qu'on est connecté ou pas 
                $_SESSION["message"]= "$pseudo,vous etes connecté";
                redirection("/index.php");

            }else{
                $_SESSION["message"]="Erreur d'identification";
            }*/
            $requete = $pdo->prepare("SELECT * FROM abonne WHERE pseudo");
            $requete->bindValue("pseudo", $pseudo);
            $requete->execute();
            $abonne= $requete->fetch(PDO::FETCH_ASSOC);
            if($abonne){
                if( password_verify($mdp, $abonne["mdp"])){
                    $_SESSION["abonne"] = $abonne;
                    $_SESSION["message"] = "$pseudo, vous etes connecté!";
                    redirection("index.php");

                }else{
                    $_SESSION["message"] = "Le mot de passe ne correspond pas";
                }
               

            }else{
                $_SESSION["message"] = "Ce pseudo n'existe pas";
            }

        }
    }
 
?>


<form method="post">
     <div class="form-group">
         <label for="pseudo">Pseudo</label>
         <input type="text" name="pseudo" id="pseudo" class="form-control" value="">
     </div>
    
     <div class="form-group">
         <label for="mdp">Mot de passe</label>
         <input type="password" name="mdp" id="mdp" class="form-control"value="">
     </div>
     <button type="submit" class="btn btn-primary mt-3">Connexion</button>
     <a href="livre_liste.php" class="btn btn-danger mt-3">Annuler</a>
 </form>
 <?php 
    include "vues/footer.html.php";
