 <form method="post">
     <div class="form-group">
         <label for="titre">Titre</label>
         <input type="text" name="titre" id="titre" class="form-control" value="<?=!empty($livre)? $livre["titre"]:""?>">
     </div>
    
     <div class="form-group">
         <label for="auteur">Auteur</label>
         <input type="text" name="auteur" id="auteur" class="form-control"value="<?=!empty($livre)? $livre["auteur"]:""?>">
     </div>
     <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
     <a href="livre_liste.php" class="btn btn-danger mt-3">Annuler</a>
 </form>