<?php
session_start();

if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location:Connection");
    exit();
}

function welcome_login(){};
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue</title>
</head>
<body>
    <h2>Bienvenue !</h2>
    <p>Vous êtes connecté en tant qu'utilisateur.</p>
    <a href="logout.php">Déconnexion</a>
</body>
</html>