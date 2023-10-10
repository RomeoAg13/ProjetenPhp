<?php
session_start();

// Destroy the session to log the user out
session_destroy();

// Redirect the user to the homepage
header("Location: /"); // Replace with the actual URL of your homepage
exit();
?>
