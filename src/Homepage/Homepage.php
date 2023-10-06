<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <title>SavourezLaSoif</title>

    </head>
    
<?php

function Homepage_view(){
    echo "

    <header>
        <h1>~SavourezLaSoif~</h1>
    
        <nav>
            <ul>
                <li><a href='/TousLesProduits'>Tous les Produits</a></li>
                <li><a href='/Panier'><i class='ph ph-shopping-cart-simple'></i></a></li>
                <li><a href='/Login'><i class='ph ph-sign-in'></i></a></li>
                <li><a href='/EnSavoirPlus'><i class='ph ph-info'></i></a></li>
            </ul>
        </nav>
    </header>
    
    <main>

    <input type='search' name='q' placeholder='Cherche une boisson...' />
    <i class='ph ph-magnifying-glass'></i>

    </main>

<footer>
    <p>&copy; 2023 SavourezLaSoif. Romeo Agostino</p>
</footer>

    <style>
    
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;        
        background-image:url('https://i.ibb.co/S36gtx2/Firefly-fond-de-boissons-avec-des-couleurs-sur-un-fond-blanc-1920x1080-80540.jpg');
        background-size:cover;
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
    
    main {
        display: flex;
        justify-content: center;
        align-items: center; 
        width:100%;
        height: 82vh;
       
    }

    input{
        box-shadow: 5px 5px 19px 2px #a7a8a880;
        width: 50%;
        border-radius:20px;
        border:1px solid grey;
        padding: 10px; 
        font-size: 16px;  

    }

    footer{
       position:absolute;
       bottom:0;
       width:100%;
        background-color:#242424;
    }

    footer p {
        display:flex;
        justify-content:center;
        color:white;
    }


    </style>
    
    ";
    
}
?>

</html>