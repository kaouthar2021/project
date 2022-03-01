<form method="post">
    <div class="form-group">
        <label for="abonne_id">Abonné</label>
        <input type="text" name="abonne_id" id="abonne_id" class="form-control" >
        <select name="abonne_id" id="abonne_id" class="form-control">
            <?php foreach($abonnes as $abo) : ?>
                <option value="<?=$abo["id"]?>">
                      <?=$abo["pseudo"] ?>
                </option>
                   

            <?php endforeach ?>
        </select>
    </div>

    <div class="form-group">
        <label for="livre_id">Livre</label>
        <select type="text" name="livre_id" id="livre_id" class="form-control" > 
            <option value=""></option>
            <option>
                <?php foreach($livres as $livre) :?>
                    <option value="<?= $livre["id"] ?>">
                        <?=$livre["titre"] . "-".$livre["auteur"] ?>

                    </option>
            </option>
            <?php endforeach;?>
            
        </select>

    </div>

    <div class="form-group">
        <label for="date_emprunt">Date d'emprunt</label>
        <input type="date" name="date_emprunt" id="date_emprunt" class="form-control" >
    </div>

    <div class="form-group">
        <label for="date_retour">Date de retour</label>
        <input type="date" name="date_retour" id="date_retour" class="form-control" >
    </div>

    <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
    <a href="livre_liste.php" class="btn btn-danger mt-3">Annuler</a>
</form>