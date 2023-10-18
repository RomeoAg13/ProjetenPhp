<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>SavourezLaSoif</title>
</head>
<body>
    <?php 
        include('header.php');
        header_view();
    ?>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #242424;
            color: white;
            padding: 10px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        h1 a {
            text-decoration: none;
            color: white;
        }
        main {
            display: flex;
            justify-content: center;
        }
        button {
            margin: 10px;
            background-color: #746AB0;
            border-color: #746AB0;
            color: white;
            width: 30%;
            height: 40px;
            cursor: pointer;
        }
        button:hover {
            width: 35%;
            height: 50px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
        }
        nav ul li {
            margin-right: 40px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        nav ul li a:hover {
            color: #767676;
        }
        img {
            width: 200px;
        }
        .boisson-homepage {
            width: 100%;
            margin: 10px;
            padding: 10px;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .boisson-row {
            width: 30%;
            margin-left: 54px;
        }
        .boisson-all {
            width: 30%;
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
        .boisson-texte {
            display: block;
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
        form {
            display: flex;
            justify-content: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        h2 a {
            text-decoration: none;
            background-color: #242424;
            border-radius: 10px;
            padding: 5px;
            color: white;
        }
        h2 {
            display: flex;
            justify-content: center;
            font-size: 35px;
            margin-right: 100px;
            margin-top: 100px;
        }
        input {
            box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.2);
        }
        .searchbar {
            width: 300px;
            height: 30px;
            font-size: 20px;
        }
        h3 {
            display: flex;
            justify-content: center;
        }
    </style>
</body>
</html>
<?php 

function search_bar()
{
    if (isset($_POST['rechercher'])) {
        $bdd = require('./sqlconnection/sql.php');
        $nom = '%' . $_POST['nom'] . '%';
        $requete = $bdd->prepare("SELECT * FROM Boisson WHERE nom ILIKE :nom");
        $requete->bindParam(':nom', $nom, PDO::PARAM_STR);
        $requete->execute();

        if ($requete->rowCount() > 0) {
            echo "<main><h2><a href='/TousLesProduits' class='button'><i class='ph ph-arrow-left'></i></a></h2>
                <h2>Résultats de la recherche :</h2></main>";
            echo "<div class='boisson-homepage'>";
            while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
                echo "
                    <div class='boisson-all'>
                        <img src='" . $row['image'] . "'/>
                        <div class='boisson-texte'>
                            <h3>" . $row['nom'] . "</h3>
                            <p>Marque : " . $row['marque'] . "</p>
                            <p>Prix : <b>" . $row['prix'] . "</b></p>
                            <form method='post' action=''>
                                <input type='hidden' name='boisson_id' value='" . $row['id'] . "'>
                                <button type='submit' name='ajouter_au_panier'>Ajouter au panier</button>
                            </form>
                        </div>
                    </div>
                ";
            }
            echo "</div>";
        } else {
            echo "<main><h2><a href='/TousLesProduits' class='button'><i class='ph ph-arrow-left'></i></a></h2>
                <h2>Résultats de la recherche :</h2></main>";
            echo "<h3>Aucun résultat trouvé.</h3>";
        }
    }
}

function ajouter_au_panier($boisson_id, $id_user)
{
    $bdd = require('./sqlconnection/sql.php');
    try {
        $requete = $bdd->prepare("INSERT INTO Panier (id, id_user) VALUES (:boisson_id, :id_user)");
        $requete->bindParam(':boisson_id', $boisson_id, PDO::PARAM_INT);
        $requete->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        
        if ($requete->execute()) {
            echo "<h3>Produit ajouté au panier avec succès.</h3>";
        } else {
            echo "<h3>Échec de l'ajout au panier.</h3>";
        }
    } catch (PDOException $e) {
        echo "Erreur de base de données : " . $e->getMessage();
    }
}

if (isset($_POST['ajouter_au_panier'])) {
    if (isset($_SESSION["user_id"])) {
        $boisson_id = $_POST['boisson_id'];
        $id_user = $_SESSION["user_id"];
        ajouter_au_panier($boisson_id, $id_user);
    } else {
        echo "<h3>Vous devez être connecté pour ajouter des produits au panier.</h3>";
    }
}
?>
