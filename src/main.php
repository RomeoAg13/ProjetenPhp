
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
    if ($route === "/Connection"|| $route === "/connection" ){
        
        require('./Login/controller.php');
        handler_login();

        return;
    }

    if ($route === "/Inscrire"|| $route === "/inscrire" ){
        require('./Inscription/controller.php');
        handler_inscription();
        return;
    }

    if ($route === "/Logout"|| $route === "/logout" ){
        require('./Login/Logout.php');
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

    if ($route === "/Profile"|| $route === "/profile" ){
        
        require('./Profile/controller.php');
        handler_profile();

        return;
    }


    echo "<h1>404 NOT FOUND</h1>";

}
route_request();
?>