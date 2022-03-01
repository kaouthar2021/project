<table class="table table-bordered">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Date emprunt</th>
        <th>Date retour</th>
        <th>Abonné</th>
        <th>Livre</th>
        <th>actions</th>
    </thead>
    <tbody>
        <?php foreach($mesemprunts as $emprunt) : ?>
            <tr>
                <td>
                    <?= $emprunt["id"] ?>
                </td>
                <td>
                    <?= $emprunt["date_emprunt"] ?>
                </td>
                <td>
                    <?= $emprunt["date_retour"] ?>
                </td>
                <td>
                   <?=$emprunt["abonne"] ?>
                </td>
                <td>
                <?= $emprunt["livre"]?>
                  
                </td>
                <td>
                    <a href="emprunt_fiche.php?id=<?= $emprunt["id"] ?>">
                        <i class="fa fa-book"></i>
                    </a>
                    <a href="emprunt_modif.php?id=<?= $emprunt["id"] ?>">
                        <i class="fa fa-edit"></i>
                    </a>
                    <a href="emprunt_suppression.php?id=<?= $emprunt["id"] ?>">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>