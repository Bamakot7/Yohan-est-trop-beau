<style type="text/css">
    .messageTable{
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
<div class="messageTable">
    <table>
        <tr>
            <td>Auteur</td><td>Date</td><td>Contenu</td>
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
                    <td>Votre message</td><td>Envoyer</td>
                </tr>
                <tr>
                    <td><textarea name="msg" rows="4" cols="30" placeholder="Votre message ici!"></textarea></td>
                    <td><button type="submit" name="Envoyer">Envoyer</button></td>
                </tr>
        </table>
    </form>


</div>
       
