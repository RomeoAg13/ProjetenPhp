<?php

function request_panier() {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $total_prix = 0;
        try {
            $bdd = require('./sqlconnection/sql.php');

            if (isset($_POST['supprimer_boisson'])) {
                $boisson_id_a_supprimer = $_POST['boisson_id_a_supprimer'];
                $deleteQuery = "DELETE FROM Panier WHERE id_user = :user_id AND id = :boisson_id";
                $deleteResult = $bdd->prepare($deleteQuery);
                $deleteResult->bindParam(':user_id', $user_id, PDO::PARAM_INT);
                $deleteResult->bindParam(':boisson_id', $boisson_id_a_supprimer, PDO::PARAM_INT);
                $deleteResult->execute();   
                header('Location: Panier');
                exit;
            }
            $query = "SELECT Boisson.* FROM Boisson 
                    INNER JOIN Panier ON Boisson.id = Panier.id
                    WHERE Panier.id_user = :user_id";
            $result = $bdd->prepare($query);
            $result->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $result->execute();
            if ($result->rowCount() > 0) {
                echo "<main>";
                while ($boisson = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "
                        <div class='boisson-panier'>
                            <img src='" . $boisson['image'] . "'/>
                            <div class='boisson-texte'>
                                <h3>" . $boisson['nom'] . "</h3>
                                <p>Marque : " . $boisson['marque'] . "</p>
                                <p>Prix : <b>" . $boisson['prix'] . "</b></p>
                            </div>
                            <form method='post' action='Panier'>
                                <input type='hidden' name='boisson_id_a_supprimer' value='" . $boisson['id'] . "'>
                                <button type='submit' name='supprimer_boisson'><i class='ph ph-trash-simple'></i></button>
                            </form>
                        </div>
                    ";
                    $total_prix += $boisson['prix'];
                }
                echo "<h2>Total des prix : $total_prix</h2>";
                echo "</main>";
            } else {
                echo "<main><span>Le panier est vide.</span></main>";
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        echo "<h2>Veuillez vous connecter.</h2>";
    }
}
?>
