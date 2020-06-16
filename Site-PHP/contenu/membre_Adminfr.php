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
                echo "<tr><td>".$row["Nom"]."</td><td>".$row["Prenom"]."</td><td><a href=\"membreAdmin.php?lang=fr&user=".$row["mail"]."\">".$row["mail"]."</a></td></tr> \n";
            }
            $data->closeCursor();
        ?>
    </table>
</div>
