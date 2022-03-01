<?php
//la fonction session _start() doit etre appelee pour pouvoir utiliser la variable
//superglobale $_session.Cette fonction doit etre appelee dans tous les fichiers PHP

session_start();
$pdo=new PDO ("mysql:host=localhost;dbname=biblio","root" ,"");
include __DIR__."/functions.inc.php";