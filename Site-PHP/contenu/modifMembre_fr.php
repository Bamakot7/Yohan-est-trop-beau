
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
        <center><h3 style="color: white">Compte de <?= $mail ?>:</h3></center>
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