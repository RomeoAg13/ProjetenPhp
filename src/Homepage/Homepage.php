<?php
    function Homepage_view(){};
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SavourezLaSoif</title>
        <script src="https://unpkg.com/@phosphor-icons/web"></script> 
    </head>
    <body>
        <?php 
            include('header.php');
            header_view();
        ?>
        <main>
            <h2> Nos dernières Boissons : </h2>
        </main>
        <footer>
            <p>&copy; 2023 Agostino Roméo. Tous droits réservés.</p>
        </footer>
    </body>
    
    <style>
    
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;   
        overflow-x:hidden; 
        
    }
    h2{
        display:flex;
        justify-content:center;
        font-size:40px;
        margin-top:100px;
        text-decoration:underline;
    }
    img{
        width:200px;
    }
    
    
    .boisson-homepage {
        width:100%;
        margin: 100px 10px 10px 10px;;
        padding: 10px;
        text-align: center;
        display: flex;
        
    }
    .boisson-all{
        width:15%;
        margin-left:250px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    
    .boisson-homepage img {
        max-width: 100%;
        height: auto;
    }
    
    .boisson-texte{
        display:block;
    }
    
    .boisson-texte {
        margin-top: 10px;
    }
    
    .boisson-texte h3 {
        font-size: 20px;
        color: #333;
    }
    
    .boisson-texte p {
        font-size: 16px;
        color: #777;
        margin: 5px 0;
    }
    
    footer{
        position:absolute;
        bottom:0 ;
        background-color:#242424;
        width:100%;
        color:white;
    }
    footer p {
        display:flex;
        justify-content:center;
    }
    
    </style>
</html>