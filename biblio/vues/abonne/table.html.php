<table class="table table-border">
    <thead class="thead-dark">
        <th>ID</th>
        <th>Pseudo</th>
        <th>mdp</th>
        <th>Niveau</th>
        <th>actions</th>
    </thead>
    <tbody>
        <?php foreach($abonnes as $abonne):?>
            <tr>
            <td>
                <?= $abonne["id"]?>
            </td>
            <td>
                <?= $abonne["pseudo"]?>
            </td>
            <td>
                <?= $abonne["mdp"]?>
            </td>
            <td>
                <?= $abonne["niveau"]?>
            </td>
            <td>
                <a href="">
                    <i class="fa fa-book"></i>
                </a>
                <a href="">
                    <i class="fa fa-edit"></i>
                </a>
                <a href="">
                    <i class="fa fa-trash"></i>
                </a>
            </td>

            </tr>
        <?php endforeach ?>
        
    </tbody>
</table>

