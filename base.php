<?php
// Informations d'identification
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass =  '';
$dbname = 'registra'; 
 
// Connexion � la base de donn�es MySQL 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 
// V�rifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>