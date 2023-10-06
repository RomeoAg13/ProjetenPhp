<?php
require_once ('.\Login\view.php');
require_once ('.\Login\request.php');
function Login_controller(){
    $view = login_view();
    $request = request_login();
    echo $view;
    echo $request;
}