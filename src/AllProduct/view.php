<?php
function allproducts_view(){};
?>

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
        
		<main>
			<form method="POST" action="Recherche">
				<input class='searchbar' type="text" name="nom" placeholder="Entrez le nom à rechercher">
				<input type="submit" name="rechercher" value="Rechercher">
			</form>
		</main>
	</body>
	<style>
		body
		{
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			margin: 0;
			padding: 0;
			overflow-x: hidden;
		}

		button
		{
			margin: 10px;
			background-color: #746AB0;
			border-color: #746AB0;
			color: white;
			width: 30%;
			height: 40px;
			cursor: pointer;
		}

		button:hover
		{
			width: 35%;
			height: 50px;
		}

		img
		{
			width: 200px;
		}

		.boisson-homepage
		{
			width: 100%;
			margin: 10px;
			padding: 10px;
			text-align: center;
			display: flex;
			flex-wrap: wrap;
		}

		.boisson-row
		{
			width: 30%;
			margin-left: 54px;
		}

		.boisson-all
		{
			width: 80%;
			box-shadow: 20px 20px 20px rgba(116, 106, 176, 0.2);
			border: 1px solid #ccc;
			border-radius: 5px;
			margin-bottom: 50px;
			margin: 10px 0px 30px 25px;
		}

		.boisson-homepage img
		{
			max-width: 100%;
			height: auto;
		}

		.boisson-texte
		{
			display: block;
		}

		.boisson-texte
		{
			margin-top: 10px;
		}

		.boisson-texte h3
		{
			font-size: 20px;
			color: #333;
		}

		.boisson-texte p
		{
			font-size: 16px;
			color: #777;
			margin: 5px 0;
		}

		form
		{
			display: flex;
			justify-content: center;
			margin-top: 50px;
			margin-bottom: 50px;
		}

		h2
		{
			margin-top: 100px;
			text-decoration: underline;
			display: flex;
			justify-content: center;
			font-size: 35px;
		}

		input
		{
			box-shadow: 10px 10px 15px rgba(0, 0, 0, 0.2);
		}

		.searchbar
		{
			width: 300px;
			height: 30px;
			font-size: 20px;
		}

		span
		{
			display: flex;
			justify-content: center;
		}
	</style>
</html>

