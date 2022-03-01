<?php
include "inc/init.inc.php";
$emprunts= selectAll("emprunt");
/* la variable $mesEmprunts contiendra le résultat de la requete
SELECT e.*,CONCAT(l.titre,"-", l.auteur) AS livre,a.pseudo AS abonne
FROM emprunt e
    JOIN livre l ON l.id = e.livre_id
    JOIN abonne a ON a.id =e.abonne_id
*/


$mesemprunts=tousLesEmprunts();
include "vues/header.html.php";
include "vues/emprunt/table.html.php";
include "vues/emprunt/table2.html.php";
include "vues/footer.html.php";