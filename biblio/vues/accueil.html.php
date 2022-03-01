<h1>Bienvenue a la bibliothéque</h1>

<table class="table table-bordered">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>actions</th>
    </thead>
    <tbody>
        <?php foreach ($livres as $livre) : ?>
            <tr>
                <td>
                    <?= $livre["id"] ?>
                </td>
                <td>
                    <?= $livre["titre"] ?>
                </td>
                <td>
                    <?= $livre["auteur"] ?>
                </td>
                <td>
                    <a href="livre_fiche.php?id=<?= $livre["id"] ?>">
                        <i class="fa fa-book"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
