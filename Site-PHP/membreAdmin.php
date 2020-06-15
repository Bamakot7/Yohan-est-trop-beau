<?php
    session_start();
    if(!(isset($_SESSION["mail"])) || $_SESSION["mail"] != "Admin"){
        header("location:accueil.php");
    }

    require_once "PHP/entete_admin.php";

    //On check d'abord si l'admin a cliqué sur un user
    if (isset($_GET['user'])) {
        //On récupe alors les info de l'user.
        require_once("connexionBdd.php");
        $query = 'SELECT * FROM `user` WHERE mail like :user';
        $statement = $dbh->prepare($query);
        $statement->execute(  
            array(  
                'user'       =>     $_GET['user'],
            )
        );
        $ligne = $statement->fetch();
        $mail = $ligne['mail'];
        $nom = $ligne['Nom'];
        $prenom = $ligne['Prenom'];
        $mdp = $ligne['MotDePasse'];
        if ($_GET['lang'] == 'fr') {
            require('contenu/modifMembre_fr.php');
        } 
    }else{
        if ($_GET['lang'] == 'fr') {
            require('contenu/membre_Adminfr.php');
        } 
    }
    
?>