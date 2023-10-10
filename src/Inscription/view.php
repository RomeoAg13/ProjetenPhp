<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <div class="container">
        <h2>Inscription</h2>
        
        <?php
        function inscription_view(){
            $messages = "";
            if (isset($error_message)) {
                $messages .= "<div class='error-message'>$error_message</div>";
            }
            if (isset($success_message)) {
                $messages .= "<div>$success_message</div>";
            }
            return $messages;
        }
        ?>
        <form action="Inscrire" method="post">
            <label for="user_name">Nom d'utilisateur :</label>
            <input type="text" name="user_name" required><br><br>
        
            <label for="mail">Email :</label>
            <input type="email" name="mail" required><br><br>
            
            <label for="mdp_user">Mot de passe :</label>
            <input type="password" name="mdp_user" required><br><br>
            
            <input type="submit" value="S'inscrire">
        </form>
        <p>Si vous avez déjà un compte, <a href="/Connection">connectez-vous ici</a>.</p>
    </div>

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

        input[type="text"],
        input[type="email"],
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
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #3498db;
            outline: none;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 12px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        .error-message {
            color: #e74c3c;
            margin-top: 10px;
        }

        p {
            margin-top: 20px;
            color: #555;
        }
        span {
            margin: 20px 0px 20px 0px;
            color: #555;
            font-size:20px;
        }

        a {
            text-decoration: none;
            color: #3498db;
            transition: color 0.3s;
        }

        a:hover {
            color: #2980b9;
        }
    </style>
</body>
</html>