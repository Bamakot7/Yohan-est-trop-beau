<style type="text/css">
    .membreTable{
        position: absolute;
        top: 25%;
        left: 25%;
        width: 50%;
        height: auto;
        background: #191919;
        opacity: 90%;
        color: white;
    }
    table{
        width: 100%;
        table-layout: fixed;
        word-wrap: break-word;
    }

    table, tr, td{
        border: 1px solid black;
        background-color: #333;
        text-align: center;
    }
</style>
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