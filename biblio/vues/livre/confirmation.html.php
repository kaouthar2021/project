<h2>Confirmation de suppression du livre n°<?=$livre["id"] ?></h2>
<form method="post">
     <div class="form-group">
         <label for="titre">Titre</label>
         <input type="text" name="titre" id="titre" class="form-control" value="<?= $livre["titre"]?>" readonly>
         <!--lecteure seule et on peut lenvoyer dans le formulaire $_POST-->
     </div>
    
     <div class="form-group">
         <label for="auteur">Auteur</label>
         <input type="text" name="auteur" id="auteur" class="form-control"value="<?= $livre["auteur"]?>" disabled>
         <!--disabled est désactiver on ne peut pas l'envoyer dans le formulaire $_POST-->
     </div>
     <button type="submit" class="btn btn-primary mt-3">Confirmer</button>
     <a href="livre_liste.php" class="btn btn-danger mt-3">Annuler</a>
 </form>