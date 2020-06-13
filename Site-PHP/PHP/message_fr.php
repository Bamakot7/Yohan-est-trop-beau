<?php
    session_start();
?>

<div class="messageTable">
    <table>
        <tr>
            <td>Auteur</td><td>Date</td><td>Contenu</td>
        </tr>
    </table>

    <table>
        <form action="message.php" method="post">
            <tr>
                <td>Votre message</td><td>Envoyer</td>
            </tr>
            <tr>
                <td><textarea name="message" rows="4" cols="50"></textarea></td><td><button type="submit">Envoyer</button></td>
            </tr>
        </form>
    </table>


</div>
       
