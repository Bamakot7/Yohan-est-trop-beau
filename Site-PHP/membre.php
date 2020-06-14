<?php 
    session_start();
    
    //si il n'y a pas de session, l'utilisateur retourne à l'accueil
    if(!(isset($_SESSION["mail"]))){
        header("location:accueil.php");
    }
    
    require('PHP/entete_co.php');

    if ($_GET['lang'] == 'fr') {
        require('PHP/membre_fr.php');
    } else {
        require('PHP/membre_en.php');
    }


?>
