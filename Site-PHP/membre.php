<?php 
    session_start();
    
    //si il n'y a pas de session, l'utilisateur retourne à l'accueil
    if(!(isset($_SESSION["mail"]))){
        header("location:accueil.php");
    }
    //on recupère d'abord toutes les info du membre
    require_once("connexionBdd.php");
    $query = 'SELECT * FROM `user` WHERE mail like :mail AND MotDePasse like :mdp';
    $statement = $dbh->prepare($query);
    $statement->execute(  
        array(  
            'mail'       =>     $_SESSION['mail'],
            'mdp'        =>     $_SESSION['mdp'],
        )
    );

    $ligne = $statement->fetch(); // ligne du résultat
    $nom = $ligne['Nom'];
    $prenom = $ligne['Prenom'];
    $num = $ligne['num'];

    //On regarde ensuite si l'utilisateur vient de rentrer son formulaire
    if (isset($_POST["newMail"]) && isset($_POST["newNom"]) && isset($_POST["newPrenom"])) {
        $query = 'UPDATE user SET Mail = :newMail, Prenom = :newPrenom, Nom = :newNom WHERE num = :num';
        $statement = $dbh->prepare($query);
        $statement->execute(  
            array(  
                'newMail'       =>     $_POST['newMail'],
                'newPrenom'     =>     $_POST['newPrenom'],
                'newNom'        =>     $_POST['newNom'],
                'num'           =>        $num,
            )
        );

        $_SESSION['mail'] = $_POST['newMail'];
    }

    //On voit ensuite si l'utilisateur a voulu changer de mot de passe
    if (isset($_POST["Psw"]) && isset($_POST["newPsw"]) && isset($_POST["confirmPsw"])) {
        //On regarde si les mots de passe entrés sont corrects
        if ($_POST["Psw"] === $_SESSION['mdp']) {
            if ($_POST["newPsw"] === $_POST["confirmPsw"]) {
                $query = 'DELETE FROM `user` WHERE num = :num';
                $pswStatement = $dbh->prepare($query);
                $pswStatement->execute(  
                    array(  
                        'num'           =>     $num,
                    )
                );
                $_SESSION['MotDePasse'] = $_POST['newPsw'];
            }else{
                if ($_GET['lang']== 'en') {
                    echo '<body onLoad="alert(\'You have entered different passwords!\')">';
                }else{
                    echo '<body onLoad="alert(\'Les mots de passe sont différents!\')">';
                }
            }
        }else{
            if ($_GET['lang']== 'en') {
                echo '<body onLoad="alert(\'Invalid password!!\')">';
            }else{
                echo '<body onLoad="alert(\'Mot de passe incorrect!\')">';
            }
        }
    }

    //On verifie si une modif a été apportée
    if (isset($_POST['Envoyer'])) {
        if ($_POST['Envoyer'] == "del") {
            $query = 'UPDATE user SET MotDePasse = :newPsw WHERE num = :num';
                $pswStatement = $dbh->prepare($query);
                $pswStatement->execute(  
                    array(  
                        'newPsw'        =>     $_POST['newPsw'],
                        'num'           =>     $num,
                    )
                );
        }
    }

    require('PHP/entete_co.php');

    if ($_GET['lang'] == 'fr') {
        require('PHP/membre_fr.php');
    } else {
        require('PHP/membre_en.php');
    }


?>
