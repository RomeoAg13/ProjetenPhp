<?php
require_once ('C:\ProjetenPhp\ProjetenPhp\Panier\view.php');
require_once ('C:\ProjetenPhp\ProjetenPhp\Panier\request.php');
function panier_controller(){
    $view = panier_view();
    $request = request_panier();
    echo $view;
    echo $request;
}