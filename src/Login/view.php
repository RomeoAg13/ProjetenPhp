<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
        <script src="https://unpkg.com/@phosphor-icons/web"></script> 
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href='/'><i class="ph ph-house"></i></a></li>
                    <li><a href='/TousLesProduits'><i class="ph ph-beer-bottle"></i></a></li>
                    <li><a href='/Panier'><i class='ph ph-shopping-cart-simple'></i></a></li>
                    <li><a href='/EnSavoirPlus'><i class="ph ph-info"></i></a></li>
                </ul>
            </nav>
        </header>

        <main>
            <div class="container">
                <h2>Connexion</h2>
                <?php
                    function login_view(){
                        if (isset($error_message)) {
                            echo "<p class='error-message'>$error_message</p>";
                        }
                    };
                ?>
                <form action="/Connection" method="post">
                    <label for="mail">Email :</label>
                    <input type="text" name="mail" required>
                    <label for="mdp_user">Mot de passe :</label>
                    <input type="password" name="mdp_user" required>
            
                    <input type="submit" value="Se connecter">
                </form>
                <p>Si vous n'avez pas de compte, <a href="/Inscrire">inscrivez-vous ici</a>.</p>
            </div>
        </main>
    </body>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column-reverse;

        }

        .container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 350px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        header{
            width: 100%;
            position: absolute;
            top: 0;
            background-color:#242424;
        }

        nav{
            width:100%;
            display:flex;
            flex-wrap:nowrap;
            
        }
        ul{
            width:100%;

            list-style:none;
            display:flex;   
        }

        li{
            display: flex;
            justify-content: space-evenly;
            width: 100%;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #3498db;
            outline: none;
        }

        input[type="submit"] {
            background-color: #746AB0;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #615994;
        }
        span {
            margin: 20px 0px 20px 0px;
            color: #555;
            font-size:20px;
        }
        .error-message {
            color: #e74c3c;
            margin-top: 10px;
        }

        p {
            margin-top: 20px;
            color: #555;
        }

        a {
            text-decoration: none;
            color: #746AB0;
            transition: color 0.3s;
        }

        a:hover {
            color: #746AB0;
        }
    </style>
</html>