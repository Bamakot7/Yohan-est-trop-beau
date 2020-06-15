<?php
    session_start();
    if(!(isset($_SESSION["mail"])) || $_SESSION["mail"] != "Admin"){
        header("location:accueil.php");
    }

    require_once "PHP/entete_admin.php";

    if ($_GET['lang'] == 'fr') {
        require('contenu/membre_Adminfr.php');
    } 
?>