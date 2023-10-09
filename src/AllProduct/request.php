<?php
require_once('./sqlconnection/sql.php');

function request_allproducts()
{
    try {
        $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=VenteBoisson', 'postgres', '1234');

        $count = 0;

        if (isset($_POST['rechercher'])) {
            $nom = '%' . $_POST['nom'] . '%'; 

            $requete = $bdd->prepare("SELECT * FROM Boisson WHERE nom ILIKE :nom");
            $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
            $requete->execute();

            if ($requete->rowCount() > 0) {
                echo "<h2>Résultats de la recherche :</h2>";
                echo "<div class='boisson-homepage'>";
                while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                    echo "
                        <div class='boisson-all'>
                            <img src='" . $row['image'] . "'/>
                            <div class='boisson-texte'>
                                <h3>" . $row['nom'] . "</h3>
                                <p>Marque : " . $row['marque'] . "</p>
                                <p>Prix : <b>" . $row['prix'] . "</b></p>
                                
                                <button type='submit' name='ajouter_au_panier'>Ajouter au panier</button>
                            </div>
                        </div>
                    ";
                }
                echo "</div>";
            } else {
                echo "Aucun résultat trouvé.";
            }
        } else {
            
            $query = "SELECT * FROM Boisson ORDER BY date_ajout ASC ";
            $result = $bdd->query($query);

            if ($result->rowCount() > 0) {
                echo "<div class='boisson-homepage'>";
                while ($afficher = $result->fetch(PDO::FETCH_ASSOC)) {
                    if ($count % 3 == 0) {
                        echo "<div class='boisson-row'>";
                    }
                    echo "
    <div class='boisson-all'>
        <img src='" . $afficher['image'] . "'/>
        <div class='boisson-texte'>
            <h3>" . $afficher['nom'] . "</h3>
            <p>Marque : " . $afficher['marque'] . "</p>
            <p>Prix : <b>" . $afficher['prix'] . "</b></p>
            
            <form method='post' action='request.php'>
    <input type='hidden' name='boisson_id' value='" . $afficher['id'] . "'>
    <button type='submit' name='ajouter_au_panier'>Ajouter au panier</button>
</form>
        </div>
    </div>
";
                    $count++;

                    if ($count % 3 == 0) {
                        echo "</div>";
                    }
                }
                echo "</div>";
            } else {
                echo "Aucune boisson trouvée.";
            }
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
