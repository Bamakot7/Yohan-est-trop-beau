
<form action="" method="post">
    <div class="membreTable">
        <center><h3 style="color: white";>Compte de <?= $mail ?>:</h3></center>
        <table>
            <tr>
                <td>Mail</td><td><input type="text" value=<?= "\"".$mail."\""?> name="newMail"></td>
            </tr>
            <tr>
                <td>Nom</td><td><input type="text" value=<?= "\"".$nom."\""?> name="newNom"></td>
            </tr>
            <tr>
                <td>Prénom</td><td><input type="text" value=<?= "\"".$prenom."\""?> name="newPrenom"></td>
            </tr>
            <tr>
                <td>Changer mot de passe</td><td><input type="password" name="newPsw"></td>
            </tr>
            <tr>
                <td>Valider</td><td><button type="submit" name="Envoyer" value="valid">Confirmer</button></td>
            </tr>
            <tr>
                <td>Supprimer le compte</td><td><button type="submit" name="Envoyer" value="del">Supprimer</button></td>
            </tr>
        </table>
    </div>
</form>