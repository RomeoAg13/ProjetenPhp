<?php


function Login_view(){

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (password_verify($password, $dbPassword)) {
        $_SESSION["logged_in"] = true;
        header("Location: welcome.php");
        exit();
    } else {
        echo "Identifiants incorrects.";
    }
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>
    <form action="welcome.php" method="post">
        <label for="email">Email :</label>
        <input type="text" name="email" required><br><br>
        
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required><br><br>
        
        <input type="submit" value="Se connecter">
    </form>
</body>
</html>