
<div class="messageTable">
    <table>
        <tr>
            <td>Author</td><td>Date</td><td>Message</td>
        </tr>
        <?php
            require_once("connexionBdd.php");

            $requete = "SELECT * FROM `user` JOIN `commentaire` ON user.num = commentaire.numUser";
            $data = $dbh->prepare($requete);
            $data->execute();
            $result = $data->fetchAll(\PDO::FETCH_ASSOC);

            foreach($result as $row){
               echo "<tr><td>".$row["Nom"]." ".$row["Prenom"]."</td><td>".$row["date"]."</td><td>".$row["commentaire"]."</td></tr>";
            }
            $data->closeCursor();
        ?>
    </table>
    
    <form action="" method="post">
        <table>
            
                <tr>
                    <td>Your message</td><td>Send</td>
                </tr>
                <tr>
                    <td><textarea name="msg" rows="4" cols="30" placeholder="Your message here!"></textarea></td>
                    <td><button type="submit" name="Envoyer">Send</button></td>
                </tr>
        </table>
    </form>


</div>
       
