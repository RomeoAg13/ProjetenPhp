<?php
session_start(); // Démarrer la session (assurez-vous de l'appeler avant tout affichage de contenu)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $conn = new PDO('pgsql:host=localhost;port=5432;dbname=VenteBoisson', 'postgres', '1234');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = $_POST["email"];
        $password = $_POST["password"];

        // Vérifiez les informations de connexion dans la base de données
        $login_query = "SELECT * FROM utilisateur WHERE mail = ?";
        $login_stmt = $conn->prepare($login_query);
        $login_stmt->execute([$email]);
        $user = $login_stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user["mdp_user"])) {
            $_SESSION["user_id"] = $user["id_user"];

            header("Location:Inscrire"); 
            $success_message = "Vous etes connecte.";
            exit();
        } else {
            header("Location:Inscrire"); 
            $error_message = "Identifiants incorrects. Veuillez réessayer.";
        }
    } catch (PDOException $e) {
        die("Erreur de connexion à la base de données : " . $e->getMessage());
    }
}
?>