<?php 
require_once('./sqlconnection/sql.php');

function request_homepage(){

    try {

        $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=VenteBoisson', 'postgres', '1234');

        $query = "SELECT * FROM Boisson ORDER BY date_ajout DESC LIMIT 3";
        $result = $bdd->query($query);

    
        if ($result->rowCount() > 0)
        {
            echo "<div class='boisson-homepage'>";
            while ($afficher = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "
                    <div class='boisson-all'>
                        <img src='" . $afficher['image'] . "'/>
                        <div class='boisson-texte'>
                            <h3>" . $afficher['nom'] . "</h3>
                            <p>Marque : " . $afficher['marque'] . "</p>
                            <p>Prix : <b>" . $afficher['prix'] . "</b></p>
                            
                        </div>
                    </div>
                    
                    ";
                    
                }
                echo "</div>";

        } 
        else 
        {
            echo "Aucune boisson trouvée.";
        }


    }catch (PDOException $e)
    {
        echo $e->getMessage();
        echo "Pas connecté ";
    }
}
?>
