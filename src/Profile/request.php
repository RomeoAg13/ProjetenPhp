<?php
require_once('./sqlconnection/sql.php');

function request_profile()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=VenteBoisson', 'postgres', '1234');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $user_id = $_SESSION["user_id"];
            $query = "SELECT * FROM utilisateur WHERE id_user = ?";

            $userinfo = $bdd->prepare($query);
            $userinfo->execute([$user_id]);
            $user_data = $userinfo->fetch(PDO::FETCH_ASSOC);

            if ($user_data) {
                // Maintenant, vous pouvez accéder aux informations de l'utilisateur
                $username = $user_data["user_name"];
                $email = $user_data["email"];
                $password = $user_data["mdp_user"];

                echo "<p>Nom d'utilisateur : $username</p>";
                echo "<p>Email : $email</p>";
            } else {
                echo "Aucune information d'utilisateur trouvée.";
            }
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
}
?>
