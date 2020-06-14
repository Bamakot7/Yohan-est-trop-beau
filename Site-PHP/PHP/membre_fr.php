
<form action="" method="post">
    <div class="membreTable">
        <center><h3 style="color: white";>Mon compte:</h3></center>
        <table>
            <tr>
                <td>Mail</td><td><input type="text" value=<?= "\"".$_SESSION['mail']."\""?> name="newMail"></td>
            </tr>
            <tr>
                <td>Nom</td><td><input type="text" value=<?= "\"".$nom."\""?> name="newNom"></td>
            </tr>
            <tr>
                <td>Prénom</td><td><input type="text" value=<?= "\"".$prenom."\""?> name="newPrenom"></td>
            </tr>
            <tr>
                <td>Ancien mot de passe</td><td><input type="password" name="Psw"></td>
            </tr>
            <tr>
                <td>Nouveau mot de passe</td><td><input type="password" name="newPsw"></td>
            </tr>
            <tr>
                <td>Confirmer le mot de passe</td><td><input type="password" name="confirmPsw"></td>
            </tr>
            <tr>
                <td>Valider</td><td><button type="submit" name="Envoyer">Confirmer</button></td>
            </tr>
        </table>
    </div>
</form>