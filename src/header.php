<?php

function header_view() {
    session_start();

    echo "
    <!DOCTYPE html>
        <html>
            <head>
                <meta charset='utf-8' />
                <script src='https://unpkg.com/@phosphor-icons/web'></script>
                <title>SavourezLaSoif</title>
            </head>
            <body>
                <header>
                    <h1> <a href='/'>SavourezLaSoif</a></h1>
                    <nav>
                        <ul>
                            <li><a href='/TousLesProduits'><i class='ph ph-beer-bottle'></i></a></li>
                            <li><a href='/Panier'><i class='ph ph-shopping-cart-simple'></i></a></li>
    ";

    if (isset($_SESSION["user_id"])) {
        
        try {
            $bdd = new PDO('pgsql:host=localhost;port=5432;dbname=VenteBoisson', 'postgres', '1234');
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $user_id = $_SESSION["user_id"];
            $query = "SELECT user_name FROM utilisateur WHERE id_user = ?";

            $userinfo = $bdd->prepare($query);
            $userinfo->execute([$user_id]);
            $user_data = $userinfo->fetch(PDO::FETCH_ASSOC);

            $username = $user_data["user_name"];

            echo "
                <li>$username</li>
                <li><a href='/Logout'>Déconnexion</a></li>
            ";
        } 
        catch (PDOException $e)
        {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    } 
    else
    {
        echo "
            <li><a href='/Connection'><i class='ph ph-sign-in'></i></a></li>
        ";
    }

    echo "
                    <li><a href='/EnSavoirPlus'><i class='ph ph-info'></i></a></li>
                </ul>
            </nav>
        </header>


        <style>
        a {
            text-decoration: none;
            color: white;
            transition: color 0.3s;
        }
        header {
            display:flex;
            align-items:center;
            justify-content:space-between;
            background-color:#242424;
            color: white;
            padding: 10px;
            text-align: center;
        }
        
        header h1 {
            margin: 0;
        }
        
        
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex; 
        }
    
        nav ul li {
            margin-right:40px;
        }
        
        nav ul li a {
            color:white;
            text-decoration: none;
        }
        
    
        nav ul li a:hover {
            color: #767676;
        }
        </style>
        ";
}