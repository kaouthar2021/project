<?php
include_once "inc/init.inc.php";
// $requete=$pdo-> query("SELECT * FROM livre");
// $livres = $requete->fetchAll(PDO::FETCH_ASSOC);

$livres=selectAll("livre");





include "vues/header.html.php";
include "vues/livre/table.html.php";
include "vues/footer.html.php";