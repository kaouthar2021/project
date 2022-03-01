<?php
include "inc/init.inc.php";

 session_destroy();//détruit la session,il n'ya plus rien dans $_SESSION
 /*pour se déconnecter du site, on aurait pu juste supprimer l'indice "abonne" de $_SESSION
 unset($_SESSION["abonne]);
 Toutes les autres valeurs dans $8SESSION existeraient toujours mais l'utilisateur ne serait plus considirée comme connecté
 */
redirection("/biblio");