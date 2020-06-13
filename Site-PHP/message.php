<?php 
    session_start();
    
    //si il n'y a pas de session, l'utilisateur retourne à l'accueil
    if(!(isset($_SESSION["mail"]))){
        header("location:accueil.php");
    }
    //si un message valide a été écrit on le publie
    if(isset($_POST["msg"])){
        
        require_once("connexionBdd.php");
        //on recup le numero d'utilisateur

        $query = 'SELECT * FROM `user` WHERE mail like :mail AND MotDePasse like :mdp';
        $statement = $dbh->prepare($query);
        $statement->execute(  
                array(  
                    'mail'       =>     $_SESSION['mail'],
                    'mdp'        =>     $_SESSION['mdp'],
                )
            );

        $ligne = $statement->fetch(); // ligne du résultat

        $msg = htmlentities($_POST["msg"]);
        $numUser = $ligne['num'];
        $dat = date("Y-m-d");
        

        

        if ($msg != '') {

            $query = 'INSERT INTO commentaire (commentaire, numUser, date) VALUES (:msg, :numUser, :dat)';
            
            $statement = $dbh->prepare($query);
            $statement->execute(  
                array(  
                    'msg'        =>     $msg,
                    'numUser'    =>     $numUser,
                    'dat'        =>     $dat,
                )
            );
        }
    }
    require('PHP/entete_co.php');

    if ($_GET['lang'] == 'fr') {
        require('PHP/message_fr.php');
    } else {
        require('PHP/message_en.php');
    }


?>
