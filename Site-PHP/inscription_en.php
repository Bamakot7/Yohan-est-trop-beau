<?php
    require('connexionBdd.php');
    require 'PHP/entete.php';


    // Verify if user already logged in ...
    

    session_start();

    if(isset($_SESSION["mail"])){
        header("location:accueil.php?lang=en");
    }

    if(isset($_POST["submit"])) {
        if(empty($_POST["email"]) || empty($_POST["password"]) ||  empty($_POST["firstName"]) || empty($_POST["lastName"])){
            $err = "Fill all the fields!";
        }else {
            require_once("connexionBdd.php");

            $mail = htmlentities($_POST["email"]);
            $prenom = htmlentities($_POST["firstName"]);
            $nom = htmlentities($_POST["lastName"]);
            $password = htmlentities($_POST["password"]);
            $confirmPassword = htmlentities($_POST["confirmPassword"]);

            // If both Passwords matches, continue
            if ($password === $confirmPassword) {
                $query = 'SELECT mail FROM user WHERE mail = :mail';
                $statement = $dbh->prepare($query);

                $statement->execute(
                    array(
                        'mail'     =>     $mail
                    )
                );

                $count = $statement->rowCount();

                // If email already taken, error out
                if ($count > 0) {
                    $err = "Email déjà utilisée !";
                }

                // Continue if email is not used...

                else {
                    $query = 'INSERT INTO user (Prenom, Nom, MotDePasse, mail) VALUES (:nom, :prenom, :password,  :mail)';
                    $statement = $dbh->prepare($query);

                    $statement->execute(
                        array(
                            'prenom'        =>     $prenom,
                            'nom'           =>     $nom,
                            'password'      =>     $password,
                            'mail'          =>     $mail,
                        )
                    );

                    $_SESSION["mail"] = $mail;
                    $_SESSION["mdp"] = $password;
                    header("location:accueil.php?lang=en");
                }
            }
        else{
            $err = "Password must be the same!";
        }
    }
}



?>

  <?php require 'PHP/entete.php'; ?>

        <form class="connexion" action="inscription.php" method="post">
        <center><h1>Inscription</h1>
            <input type="text" name="email" placeholder="Email"><br><br>
            <input type="text" name="firstName" placeholder="First name"><br><br>
            <input type="text" name="lastName" placeholder="Last name"><br><br>
            <input type="password" name="password" placeholder="Password"><br><br>
            <input type="password" name="confirmPassword" placeholder="Confirm password"><br><br>
            <input class="boutonConnexion" type="submit" name="submit" value="Submit">
            <?php
            if(isset($err)) {
            echo('<font color="red">'.$err.'</font>');
            }
            ?>

        </center></form>


        <?php $bas = '-100%'; ?>
        <?php require 'PHP/bas_page.php'; ?>
    </body>
    </html>
