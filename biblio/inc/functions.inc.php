<?php
function redirection($url){
    header("location: $url");
    exit;
}

function dump($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";

}
//on peut créer une fonction sans argument
function pdo(){ 
$pdo=new PDO ("mysql:host=localhost;dbname=biblio","root" ,"");
return $pdo;

}
/** 
* fonction qui renvoie la liste des enregistrments de la table passée en argument
*@param string $table
*@param $id
* @return array
*/
function selectAll($table){

   global  $pdo;
  $requete = $pdo-> query("SELECT * FROM  $table");
 // $requete = pdo()-> query("SELECT * FROM  $table");

$resultat = $requete->fetchAll(PDO::FETCH_ASSOC);

   
    return $resultat;
}


function selectByID($table,$id){
    global $pdo;
    $requete = $pdo->query("SELECT * FROM $table WHERE  id = $id");
    return $requete->fetch(PDO::FETCH_ASSOC);
    
}
//return un array

function tousLesEmprunts(){
    global $pdo;
    $requete = $pdo->query("SELECT e.*, CONCAT(l.titre, ' - ', l.auteur) AS livre, a.pseudo AS abonne
                            FROM emprunt e 
                                JOIN livre l ON l.id = e.livre_id
                                JOIN abonne a ON a.id = e.abonne_id");
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}