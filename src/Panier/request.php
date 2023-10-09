<?php 
function request_panier(){
    try {

        $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=VenteBoisson', 'postgres', '1234');

        $query = "SELECT * FROM Boisson ORDER BY date_ajout DESC LIMIT 1 ";
        $result = $bdd->query($query);
        
        while ($row = $result->fetch()) {
            echo "
            <main class='panier'> 
                <section>
                    <table>
                        <tr>
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Quantite</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><img src='" . $row['image'] . "'/></td>
                            <td>".$row['prix']."</td>
                            <td>1</td>
                            <td><i class='ph ph-trash'></i></td>
                        <tr>
                    </table>
                </section                
            </main>";
        }

    }catch (PDOException $e)
      {
        echo $e->getMessage();
        echo "Pas connecté ";
    }
}