<?php
function request_allproducts()
{
    try {
        $bdd = require('./sqlconnection/sql.php');
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
                                
                                <form method='post' action=''>
                                    <input type='hidden' name='boisson_id' value='" . $row['id'] . "'>
                                    <button type='submit' name='ajouter_au_panier'>Ajouter au panier</button>
                                </form>
                            </div>
                        </div>
                    ";
                }
                echo "</div>";
            } else {
                echo "Aucun résultat trouvé.";
            }
        }
        
        else 
        {
            $query = "SELECT * FROM Boisson ORDER BY date_ajout ASC ";
            $result = $bdd->query($query);
            if ($result->rowCount() > 0) {
                echo "<div class='boisson-homepage'>";
                while ($afficher = $result->fetch(PDO::FETCH_ASSOC)) {
                    if ($count % 2 == 0) {
                        echo "<div class='boisson-row'>";
                    }
                    echo "
                        <div class='boisson-all'>
                            <img src='" . $afficher['image'] . "'/>
                            <div class='boisson-texte'>
                                <h3>" . $afficher['nom'] . "</h3>
                                <p>Marque : " . $afficher['marque'] . "</p>
                                <p>Prix : <b>" . $afficher['prix'] . "</b></p>
                                
                                <form method='post' action=''>
                                    <input type='hidden' name='boisson_id' value='" . $afficher['id'] . "'>
                                    <button type='submit' name='ajouter_au_panier'>Ajouter au panier</button>
                                </form>
                            </div>
                        </div>
                    ";
                    $count++;
                    if ($count % 2 == 0) {
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

function ajouter_au_panier($boisson_id, $id_user, $bdd) {
    try {
        $requete = $bdd->prepare("INSERT INTO Panier (id, id_user) VALUES (:boisson_id, :id_user)");
        $requete->bindParam(':boisson_id', $boisson_id, PDO::PARAM_INT);
        $requete->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        
        if ($requete->execute()) {
            echo "<span>Produit ajouté au panier avec succès.</span>";
        } else {
            echo "<span>Échec de l'ajout au panier.</span>";
        }
    } catch (PDOException $e) {
        echo "Erreur de base de données : " . $e->getMessage();
    }
}
if (isset($_POST['ajouter_au_panier'])) {
    if (isset($_SESSION["user_id"])) {
        $bdd = require('./sqlconnection/sql.php');
        $boisson_id = $_POST['boisson_id'];
        $id_user = $_SESSION["user_id"];
        ajouter_au_panier($boisson_id, $id_user, $bdd);
    } else {
        echo "<span>Vous devez être connecté pour ajouter des produits au panier.</span>";
    }
}
?>
