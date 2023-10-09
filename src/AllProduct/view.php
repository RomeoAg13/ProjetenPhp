<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script src="https://unpkg.com/@phosphor-icons/web"></script>

        <title>SavourezLaSoif</title>
    </head>
    <body >
        <header>
            <h1> <a href='/'>SavourezLaSoif</a></h1>
            <nav>
                <ul>
                    <li ><a href='/TousLesProduits'class="dessus">Tous les Produits</a></li>
                    <li><a href='/Panier'><i class='ph ph-shopping-cart-simple'></i></a></li>
                    <li><a href='/Login'><i class='ph ph-sign-in'></i></a></li>
                    <li><a href='/EnSavoirPlus'><i class='ph ph-info'></i></a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            <?php
                function allproducts_view(){};
                
            ?>
             <form method="POST" action="Recherche">
        <input class='searchbar' type="text" name="nom" placeholder="Entrez le nom à rechercher">
        <input type="submit" name="rechercher" value="Rechercher">
    </form>
    

    
        </main>












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


        button{
            margin:10px;
            background-color:  #3cb5d8;
            border-color:#3cb5d8;
            color:white;
            width:30%;
            height:40px;
            cursor:pointer;

        }

        button:hover{
            width:35%;
            height:50px;
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
        h2{
            margin-top:100px;
            text-decoration:underline;
        }
        img{
            width:200px;
        }
        .boisson-homepage {
            width:100%;
            margin: 10px;
            padding: 10px;
            text-align: center;
            display: flex;
            flex-wrap: wrap;

        }

        .boisson-row {
            width: 30%;
            margin-left: 54px;
        }

        .boisson-all{
            width: 80%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 50px;
            margin: 10px 0px 30px 25px;

            
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


        form{
            display:flex;
            justify-content:center;
            margin-top:50px;
            margin-bottom:50px;  
        }

        h2{
            display:flex;
            justify-content:center;
            font-size:35px;
        }

        input{
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.2);

        }
        .searchbar{
            width:300px;
            height:30px;
            font-size:20px;
            

        }


        </style>
    </body >
</html>