<?php

//$_SERVER => HASHMAP contenat
//information requete

function route_request(){
    $route = $_SERVER['REQUEST_URI'];

    if($route ==="/"){
        require_once('C:\ProjetenPhp\ProjetenPhp\Homepage\controller.php');
        handler_homepage();

        return;
    }
    if ($route === "/Panier" || $route === "/panier"){
        
        require_once('C:\ProjetenPhp\ProjetenPhp\Panier\controller.php');
        panier_controller();

        return;
    }
    if ($route === "/Login"|| $route === "/login" ){
        
        require_once('C:\ProjetenPhp\ProjetenPhp\Login\controller.php');
        Login_controller();

        return;
    }

   


    echo "<h1>404 NOT FOUND</h1>";

}
route_request();