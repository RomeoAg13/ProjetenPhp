<?php
require ('./Homepage/Homepage.php');
require ('./Homepage/request.php');
function handler_homepage(){
    $view = Homepage_view();
    $request = request_homepage();
    echo $view;
    echo $request;
}