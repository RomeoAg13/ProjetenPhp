<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <script src="https://unpkg.com/@phosphor-icons/web"></script>

        <title>SavourezLaSoif</title>

    </head>

    <?php
        function savoirplus_view(){}

?>
    <body>
        <header>
            <h1> <a href='/'>SavourezLaSoif</a></h1>
    
            <nav>
                <ul>
                    <li><a href='/TousLesProduits'>Tous les Produits</a></li>
                    <li><a href='/Panier'><i class='ph ph-shopping-cart-simple'></i></a></li>
                    <li><a href='/Connection'><i class='ph ph-sign-in'></i></a></li>
                    <li><a href='/EnSavoirPlus'><i class='ph ph-info dessus'></i></a></li>
                </ul>
            </nav>
        </header>

        <h1> <u>Qui suis je ? </u></h1>
        <main>
            <p>Je suis Roméo Agostino, étudiant en B2 développement web et application.<br>
            Voici mon Site de vente de Boissons.<br>
        Si vous avez des questions, n'hésitez pas à me contacter à l'adresse e-mail suivante : <a href="mailto:romeo.agostino@efrei.net">romeo.agostino@efrei.net</a></p>
        </main>

        






    <style>
    
    .dessus{
        color:grey;
    }
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



    h1{
        display:flex;
        justify-content:center;
        margin:50px;
        
    }

    main{
        display:flex;
        justify-content:center;
        align-items:center;
        background-color:whitesmoke;
        width:50%;
        margin:auto;
        height:auto;
    }
    main p {
        text-align:center;
    }

    </style>
    
    

    </body >

</html>