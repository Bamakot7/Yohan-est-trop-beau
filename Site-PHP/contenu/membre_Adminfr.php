<div class="membreTable">
    <center><h3 style="color: white";>Liste des membres:</h3></center>
    <table>
        <tr>
            <td>Nom</td><td>Prenom</td><td>Mail</td>
        </tr>
        <?php
            require_once("connexionBdd.php");
            $requete = "SELECT * FROM `user` ";
            $data = $dbh->prepare($requete);
            $data->execute();
            $result = $data->fetchAll(\PDO::FETCH_ASSOC);
    
            foreach($result as $row){
                echo "<tr><td>".$row["Nom"]."</td><td>".$row["Prenom"]."</td><td>".$row["mail"]."</td></tr> \n";
            }
            $data->closeCursor();
        ?>
    </table>
</div>
