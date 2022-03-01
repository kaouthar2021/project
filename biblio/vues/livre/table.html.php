<table class="table table-border">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Titres</th>
        <th>Auteur</th>
        <th>actions</th>
    </thead>
    <tbody>
        <?php foreach($livres as $livre):?>
            <tr>
            <td>
                <?= $livre["id"]?>
            </td>
            <td>
                <?= $livre["titre"]?>
            </td>
            <td>
                <?= $livre["auteur"]?>
            </td>
            <td>
                <a href="livre_fiche.php?id=<?= $livre["id"]?>">
                    <i class="fa fa-book"></i>
                </a>
                <a href="livre_modif.php?id=<?= $livre["id"]?>">
                    <i class="fa fa-edit"></i>
                </a>
                <a href="livre_suppression.php?id=<?= $livre["id"]?>">
                    <i class="fa fa-trash"></i>
                </a>
            </td>

            </tr>
        <?php endforeach ?>
        
    </tbody>
</table>

