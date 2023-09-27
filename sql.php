<?php

try{
    $bdd= new PDO('pgsql:host=localhost;port=5432;dbname=VenteBoisson','postgres','1234');
    echo "connexion reussie";
    
}
catch(PDOException $e){
    echo $e -> getMessage();
    echo "non connecte";
}