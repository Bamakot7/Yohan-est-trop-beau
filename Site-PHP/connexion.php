<?php
// Connexion à la base de donnéees
require('connexionBdd.php');
//Initialisation de la session
session_start ();

// On vérifie que l'utilisateur à bien appuyer sur le bouton du formulaire
if (isset($_POST['submit']) && $_POST['submit'] == 'Envoyer') {
  // récupère les données saisies
  $mail = $_POST['mail'];
  $mdp = $_POST['mdp'];

  //On vérifie qu'elles ne soient pas vides
  if (!(empty($mail)) && !(empty($mdp))) {

    //On récupère les identigfiants de l'utilisateur dans la base de données
    $results=$dbh->query("SELECT mail,MotDePasse FROM `user` WHERE mail = '$mail' AND MotDePasse = '$mdp'");

    $ligne = $results->fetch(); // ligne du résultat

    //On récupère son login et mdp
    $mail_valide = $ligne['mail'];
    $mdp_valide = $ligne['MotDePasse'];

    //On teste l'égalité entre les données saisies du formulaire et les Identifiants de la base de données
    if ($mail_valide == $mail && $mdp_valide == $mdp) {
      // On démarre la session si ce sont les bons
      $_SESSION['mail'] = $mail;
      $_SESSION['mdp'] = $mdp;

      header('location: accueilConnecte.php');
    }
    else {//Sinon on affiche un message d'erreur
      echo '<body onLoad="alert(\'Identifiants incorrects\')">';
    }
  }
  else { //Si l'utilisateur appuie sur le bouton en laissant les champs login et mdp vides on lui notifie
    echo '<body onLoad="alert(\'Veuillez entrer un login et un mot de passe\')">';
  }
}
?>

  <?php require 'PHP/entete.php'; ?>
  <div class="titre"><h1>CONNEXION À VOTRE ESPACE</h1><br></div>

    <!-- Formulaire de connexion -->
  <form class="connexion" action="" method="post">
    <br>
    Adresse mail<br><input type="text" name="mail" size="25"/><br><br><br>
    Mot de passe <br><input type="password" name="mdp" size="25"/><br><br><br>
  <input class="boutonConnexion" type="reset" name="submit" value="Effacer" />
  <input class="boutonConnexion" type="submit" name="submit" value="Envoyer" /><br><br>
  </form>

  <?php $bas = '-100%'; ?>
  <?php require 'PHP/bas_page.php'; ?>
</body>

</html>
