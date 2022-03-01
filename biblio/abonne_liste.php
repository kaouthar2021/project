<?php
include "inc/init.inc.php";

// $requete=$pdo-> query("SELECT * FROM abonne");
// $abonnes = $requete->fetchAll(PDO::FETCH_ASSOC);

$abonnes=selectAll("abonne");
include "vues/header.html.php";
include "vues/abonne/table.html.php";
include "vues/footer.html.php";