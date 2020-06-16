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

        //On regarde si l'admin a modifié un membre.
        if (isset($_POST['Envoyer'])) {
            
            if ($_POST['Envoyer'] == "del") {
                $query = 'DELETE FROM `user` WHERE mail = :mail';
                $pswStatement = $dbh->prepare($query);
                $pswStatement->execute(  
                    array(  
                        'mail'           =>     $mail,
                    )
                );
                header('location:membreAdmin.php?lang='.$_GET['lang']);
            }else{//Sinon il a voulu modifier

                if (isset($_POST["newMail"]) && isset($_POST["newNom"]) && isset($_POST["newPrenom"])) {
                    $query = 'UPDATE user SET mail = :newMail, Prenom = :newPrenom, Nom = :newNom WHERE mail = :mailconfirme';
                    $statement = $dbh->prepare($query);
                    $statement->execute(  
                        array(  
                            'newMail'           =>     $_POST['newMail'],
                            'newPrenom'         =>     $_POST['newPrenom'],
                            'newNom'            =>     $_POST['newNom'],
                            'mailconfirme'      =>     $mail,
                        )
                    );
                    header('location:membreAdmin.php?lang='.$_GET['lang'].'&user='.$_POST['newMail']);
                }
                if (isset($_POST["newPsw"])) {
                    $query = 'UPDATE user SET MotDePasse = :newPsw WHERE mail = :mailconfirme';
                    $statement = $dbh->prepare($query);
                    $statement->execute(  
                        array(  
                            'newPsw'           =>     $_POST['newPsw'],
                            
                            'mailconfirme'      =>     $mail,
                        )
                    );
                }

            }
        }
        if ($_GET['lang'] == 'fr') {
            require('contenu/modifMembre_fr.php');
        }else{
            require('contenu/modifMembre_en.php');
        } 
    }else{
        if ($_GET['lang'] == 'fr') {
            require('contenu/membre_Adminfr.php');
        }else{
            require('contenu/membre_Adminen.php');
        }  
    }
    
?>