
<?php
function route_request(){
    $route = $_SERVER['REQUEST_URI'];

    if($route ==="/"){

        require('./Homepage/controller.php');

        handler_homepage();

        return;
    }
    if ($route === "/Panier" || $route === "/panier"){
        
        require('./Panier/controller.php');
        handler_panier();

        return;
    }
    if ($route === "/Login"|| $route === "/login" ){
        
        require('./Login/controller.php');
        handler_login();

        return;
    }
    if ($route === "/TousLesProduits"|| $route === "/touslesproduits" ){
        
        require('./AllProduct/controller.php');
        handler_allproducts();

        return;
    }

    if ($route === "/EnSavoirPlus"|| $route === "/ensavoirplus" ){
        
        require('./SavoirPlus/controller.php');
        handler_savoirplus();

        return;
    }

    if ($route === "/Recherche"|| $route === "/recherche" ){
        
        require('./Recherche/search.php');
        search_bar();

        return;
    }

    if ($route === "/request.php"|| $route === "/request.php" ){
        
        require('./Panier/controller.php');
        handler_panier();

        return;
    }
    echo "<h1>404 NOT FOUND</h1>";

}
route_request();
?>
