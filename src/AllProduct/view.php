<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

        <title>SavourezLaSoif</title>

    </head>
    
<?php

function allproducts_view(){
    echo "

    <header>
        <h1> <a href='/'>SavourezLaSoif</a></h1>
    <hr>
        <nav>
            <ul>
                <li><a href='/TousLesProduits'>Tous les Produits</a></li>
                <li><a href='/Panier'>Mon Panier</a></li>
                <li><a href='/Login'>Se connecter</a></li>
                <li><a href='#'>En Savoir Plus</a></li>
            </ul>
        </nav>
    </header>
    
<main>
    <section class='products'>
        <!-- Product cards will be added here -->
    </section>
</main>


<section class='products'>

    <div class='product'>

    </div>

    <div class='product'>

    </div>

</section>


<footer>
    <p>&copy; 2023 SAvourezLaSoif. Romeo Agostino</p>
</footer>

    <style>
    
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    
    header {
        background-color: #242424;
        color: #fff;
        padding: 10px;
        text-align: center;
    }
    
    header h1 {
        margin: 0;
    }
    
    a{
        text-decoration:none;
        color:WHITE;
    }

    a:hover{
        color:#D3D0D0;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        justify-content: space-around;
    }
    
    nav ul li a {
        color:white;
        text-decoration: none;
    }
    
    nav ul li a:hover {
        color: #767676;
    }
    
    
    
    .products {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    
    .product {
        background-color: #fff;
        width: 30%;
        margin: 15px 0;
        padding: 20px;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }
    
    .product:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    
    .product img {
        width: 100%;
        height: auto;
    }
    
    .product h2 {
        margin: 20px 0;
        color: #333;
    }
    
    .product p {
        color: #666;
    }
    
    footer{
        bottom:0;
    }


    </style>
    
    ";
    
}
?>

</html>