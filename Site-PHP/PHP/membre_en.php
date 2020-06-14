
<form action="" method="post">
    <div class="membreTable">
        <center><h3 style="color: white";>My account:</h3></center>
        <table>
            <tr>
                <td>Mail</td><td><input type="text" value=<?= "\"".$_SESSION['mail']."\""?> name="newMail"></td>
            </tr>
            <tr>
                <td>Surname</td><td><input type="text" value=<?= "\"".$nom."\""?> name="newNom"></td>
            </tr>
            <tr>
                <td>Name<td><input type="text" value=<?= "\"".$prenom."\""?> name="newPrenom"></td>
            </tr>
            <tr>
                <td>Previous password</td><td><input type="password" name="Psw"></td>
            </tr>
            <tr>
                <td>New password</td><td><input type="password" name="newPsw"></td>
            </tr>
            <tr>
                <td>Confirm password</td><td><input type="password" name="confirmPsw"></td>
            </tr>
            <tr>
                <td>Submit</td><td><button type="submit" name="Envoyer">Submit</button></td>
            </tr>
        </table>
    </div>
</form>