<?php
include "inc/init.inc.php";

 if($_POST){
     
    extract($_POST);
    if(!empty($pseudo) && !empty($mdp)){
        $requete = $pdo->prepare("SELECT * FROM abonne WHERE pseudo = :param_pseudo "); //param_pseudo cest comme le variable
        //on peut donner le nom qu'on veut
        $requete->bindValue("param_pseudo",$pseudo);
        $resultat = $requete->execute();//$resultat si la requete soit true soit false
        if( $requete->rowCount()==1){ //$requete 
            $_SESSION["message"]= "Ce pseudo est déja utilisé";
        }else{
            $rq=$pdo->prepare("INSERT INTO abonne
                                   VALUES (null, :param_pseudo, :param_mdp,10)");//null sa veut dire pas de valeur pour le id
                                   //parce que on ne peut pas donner de valeur pour le id
                                   //quand on supprime un id il ne sera jamais remplacer a un autre
            $rq->bindValue("param_pseudo",$pseudo);
           //le mot de passe est encodé avant d'etre enregistreé en bdd
            $mdpCrypte = password_hash($mdp, PASSWORD_DEFAULT);
            $rq->bindValue("param_mdp",$mdpCrypte);
            $resultat=$rq->execute();
            if($resultat && $rq->rowCount()==1){
                $requete = $pdo->query("SELECT*FROM abonne WHERE pseudo= '$pseudo'");
                $_SESSION["abonne"] = $requete->fetch(PDO::FETCH_ASSOC);
                $_SESSION["message"]= "Votre inscription est bien enregistrée";
                redirection("/biblio");
            }else{
                $_SESSION["message"]= "Erreur lors de l'enregistrement en base de données";
            }

            
            
        }


    }else{
        $_SESSION["message"]= "veuillez renseigner tous les champs obligatoires ";
    }


    

 }





include "vues/header.html.php";

?>

<h1>Inscription</h1>
<form method="post">
     <div class="form-group">
         <label for="pseudo">Pseudo</label>
         <input type="text" name="pseudo" id="pseudo" class="form-control" required> <!--required oblige l'utilisateur pour ne pas envoyer un champ vide-->
     </div>
    
     <div class="form-group">
         <label for="mdp">Mot de passe *</label>
         <input type="password" name="mdp" id="mdp" class="form-control" required>
     </div>
     <button type="submit" class="btn btn-primary mt-3">Inscription</button>
     <a href="/biblio" class="btn btn-danger mt-3">Annuler</a>
 </form>
<?php 
include "vues/footer.html.php";
