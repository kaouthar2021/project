<?php
include_once "inc/init.inc.php";
$requete = $pdo->query("SELECT * FROM livre");
$livres = $requete->fetchAll(PDO::FETCH_ASSOC);



   include "vues/header.html.php";
   include "vues/accueil.html.php";
    include "vues/footer.html.php";
