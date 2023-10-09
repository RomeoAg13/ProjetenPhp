<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script src="https://unpkg.com/@phosphor-icons/web"></script>

        <title>SavourezLaSoif</title>

    </head>

    <?php
        function panier_view(){}

?>
    <body>
        <header>
            <h1> <a href='/'>SavourezLaSoif</a></h1>
    
            <nav>
                <ul>
                    <li><a href='/TousLesProduits'>Tous les Produits</a></li>
                    <li><a href='/Panier'><i class='ph ph-shopping-cart-simple dessus'></i></a></li>
                    <li><a href='/Login'><i class='ph ph-sign-in'></i></a></li>
                    <li><a href='/EnSavoirPlus'><i class='ph ph-info'></i></a></li>
                </ul>
            </nav>
        </header>
        <a href="/TousLesProduits">Boutique</a>

    <style>
    
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;   
        overflow-x:hidden; 
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
    
    h1 a{
        text-decoration:none;
        color:WHITE;
    }
    .dessus{
        color:grey;
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

    .panier{
        display:flex;
        
        justify-content:center;
        min-height:100vh;
    }

    img{
        width:40px ;
        padding: 8px 0;
    }

    .panier section{
        
        background-color:white;
        padding:10px;
        border-radius:6px;
    }

    table{
        border-collapse:collapse;
        width: 10px;
        letter-spacing:2px;
        font-size:20px;
    }
    th{
        padding:20px;
       
        font-weight:400;
    }
    td{
        border-top:0.5px solid #999;
        text-align:center;
        color:#37a6ff;

    }

    tr{
        border-bottom: 0.5px solid #999;
    }
    </style>
    
    

    </body >

</html>