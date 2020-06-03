<?php
/* Connexion au serveur et à la base de données */
$host="sqletud.u-pem.fr";
$user="";
$pwd="";
$db="_db";
    // Connexion avec avec PDO
try{
$con='mysql:host='.$host.';dbname='.$db;
$dbh = new PDO($con,$user,$pwd,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)); }
catch(Exception $e){
die('Connexion impossible à la base de données !'.$e->getMessage());
}

 ?>
