
<?php
function route_request(){
    $route = $_SERVER['REQUEST_URI'];

    if($route ==="/"){

        require('./Homepage/controller.php');

        handler_homepage();

        return;
    }
    if ($route === "/Panier" || $route === "/panier"){
        
        require_once('./Panier/controller.php');
        panier_controller();

        return;
    }
    if ($route === "/Login"|| $route === "/login" ){
        
        require_once('./Login/controller.php');
        Login_controller();

        return;
    }

   


    echo "<h1>404 NOT FOUND</h1>";

}
route_request();
?>
