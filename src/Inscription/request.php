<?php   
    function request_inscription(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=VenteBoisson', 'postgres', '1234');
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $user_name = $_POST["user_name"];
            $email = $_POST["mail"];
            $password = $_POST["mdp_user"];
            $query = "SELECT * FROM utilisateur WHERE mail = ?";
            $check = $bdd->prepare($query);
            $check->execute([$email]);
            if ($check->rowCount() > 0) {
                $error_message = "<span>Cet email est déjà utilisé. Utilisez un autre email.</span>";
            } 
            else {
                $password = password_hash($password, PASSWORD_DEFAULT);
                $insert_query = "INSERT INTO utilisateur (user_name, mdp_user, mail) VALUES (?, ?, ?)";
                $insert= $bdd->prepare($insert_query);
                if ($insert->execute([$user_name, $password, $email])) {
                    $success_message = "<span>Bravo, inscription réussie. Vous pouvez vous connecter maintenant.</span>";
                } else {
                    $error_message = "<span>Erreur, une erreur s'est produite lors de l'inscription. Veuillez réessayer.</span>";
                }
            }
        } 
        catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
    if (isset($error_message)) {    
        return $error_message;
        } elseif (isset($success_message)) {    
            return $success_message;
        }
}
?>
