<?php
$host="sqletud.u-pem.fr";
$user="yastier"; /* Votre login */
$pwd="uGbeeuay58"; /* Votre mot de passe */
$db="yastier_db"; /* Le nom de votre base : de la forme ici : xxx_db avec xxx votre login */
// Connexion avec avec PDO
try{
    $con='mysql:host='.$host.';dbname='.$db;
    $dbh = new PDO($con,$user,$pwd,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
    die('Connexion impossible à la base de données !'.$e->getMessage());
}
 ?>
