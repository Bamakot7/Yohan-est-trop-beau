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