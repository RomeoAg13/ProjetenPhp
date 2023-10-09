<?php
require_once ('.\Login\view.php');
require_once ('.\Login\request.php');
require_once ('.\Login\welcome.php');
function handler_login(){
    $view = login_view();
    $request = request_login();
    $welcome = welcome_login();
    echo $view;
    echo $request;
    echo $welcome;
}