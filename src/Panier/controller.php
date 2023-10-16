<?php
require('.\Panier\view.php');
require_once('.\Panier\request.php');
function handler_panier(){
    $view = panier_view();
    $request = request_panier();
    echo $view;
    echo $request;
}