<?php

function request_panier(){

    session_start();
    
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }
    
    $total = 0;
    
    if (isset($_POST['boisson_id'])) {
        $boisson_id = $_POST['boisson_id'];
        
        $_SESSION['panier'][] = $boisson_id;
        

        header('Location: Panier');
        exit;
    }
    

    if (isset($_POST['supprimer_boisson'])) {
        $boisson_id_a_supprimer = $_POST['boisson_id_a_supprimer'];

        $_SESSION['panier'] = array_diff($_SESSION['panier'], array($boisson_id_a_supprimer));
        

        header('Location: Panier');
        exit;
    }
    
    if (empty($_SESSION['panier'])) {
        echo "<main><span>Le panier est vide.</span></main>";
    } else {

        try {
            $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=VenteBoisson', 'postgres', '1234');
            
            foreach ($_SESSION['panier'] as $boisson_id) {
                $requete = $bdd->prepare("SELECT * FROM Boisson WHERE id = :id");
                $requete->bindParam(':id', $boisson_id, PDO::PARAM_INT);
                $requete->execute();
                $boisson = $requete->fetch(PDO::FETCH_ASSOC);
                

                $total += $boisson['prix'];
                
                echo "
                    <main>
                        <div class='boisson-panier'>
                            <img src='" . $boisson['image'] . "'/>
                            <div class='boisson-texte'>
                                <h3>" . $boisson['nom'] . "</h3>
                                <p>Marque : " . $boisson['marque'] . "</p>
                                <p>Prix : <b>" . $boisson['prix'] . "</b></p>
                            </div>
                            <form method='post' action='Panier'>
                                <input type='hidden' name='boisson_id_a_supprimer' value='" . $boisson_id . "'>
                                <button type='submit' name='supprimer_boisson'><i class='ph ph-trash-simple'></i></button>
                            </form>
                        </div>
                    </main>
                ";
            }
            
            echo "<h2>Total du panier : " . $total. "</h2>";
            
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}
?>