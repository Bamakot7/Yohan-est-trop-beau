<?php
    require_once require('connexionBdd.php');
    
    // Verify if user already logged in ...
    session_start();
    if(isset($_SESSION["mail"])){
        header("location:test.php");
    }
    
    if(isset($_POST["submit"])) {
        if(empty($_POST["email"]) || empty($_POST["password"]) ||  empty($_POST["firstName"]) || empty($_POST["lastName"])){
            $err = "Remplissez tout les champs !";
        }
        else {
            require_once("connexionBdd.php");
    
            $mail = htmlentities($_POST["email"]);
            $prenom = htmlentities($_POST["firstName"]);
            $nom = htmlentities($_POST["lastName"]);
            $password = htmlentities($_POST["password"]);
            $confirmPassword = htmlentities($_POST["confirmPassword"]);
    
            // If both Passwords matches, continue
            if ($password === $confirmPassword) {
                // If date is in a valid format, continue
                if (validateDate($dob) == 1){
                    // If email is in a valid format, continue
                    $date = explode("/",$dob);
                    $date = array($date[2], $date[1], $date[0]);
                    $fdate=implode("-", $date);
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $query = 'SELECT Mail FROM Adherent WHERE Mail = :email';
                        $statement = $dbh->prepare($query);
    
                        $statement->execute(  
                            array(  
                                'email'     =>     $email
                            )
                        );
    
                        $count = $statement->rowCount();
    
                        // If email already taken, error out
                        if ($count > 0) {
                            $err = "Email déjà utilisée !";
                        }
    
                        // Continue if email is not used...
                        else {
    
                            $query = 'SELECT Username FROM Adherent WHERE Username = :username';
                            $statement = $dbh->prepare($query);
        
                            $statement->execute(  
                                array(  
                                    'username'     =>     $username
                                )
                            );
        
                            $count = $statement->rowCount();
        
                            // If username already taken, error out
                            if ($count > 0) {
                                $err = "Pseudo déjà utilisé !";
                            }
    
                            // Continue if username is not used...
                            else {
                                $query = 'INSERT INTO Adherent (Username, NomAd, PrenomAd, Mail, MotDePasse, CodeDif, DateNaissance) VALUES (:username, :nom, :prenom, :email, SHA1(:password), :level, :dob)';
                                $statement = $dbh->prepare($query);
            
                                $statement->execute(  
                                    array(  
                                        'username'     =>     $username,
                                        'nom'          =>     $nom,
                                        'prenom'       =>     $prenom,
                                        'email'        =>     $email,
                                        'password'     =>     $password,
                                        'level'        =>     $level,
                                        'dob'          =>     $fdate
                                    )
                                );
    
                                $err = "Compte enregistré, veuillez vous connecter !";
                            }
                        }
                    }
                    else {
                        $err = "Email Invalide !";
                    }
                }
                else {
                    $err = "Date invalide, JJ/MM/YYYY";
                }
            }
            else {
                $err = "Les mots de passes ne sont pas identiques !";
            }
        }
    }
    
    
    ?>
    
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projet Escalade</title>
    </head>
    <body>
    
        
        <form class="connexion" action="inscription.php" method="post">
        <h1>Inscription</h1>
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="firstName" placeholder="Prénom">
            <input type="text" name="lastName" placeholder="Nom">   
            <input type="password" name="password" placeholder="Mot de Passe">
            <input type="password" name="confirmPassword" placeholder="Comfirmation Mot de Passe">
            <input type="submit" name="submit" value="Envoyer">
            <?php
            if(isset($err)) {
            echo('<font color="red">'.$err.'</font>');
            }
            ?>
    
        </form>
    
    
        
    </body>
    </html>
?>