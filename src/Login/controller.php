<?php
require_once ('C:\ProjetenPhp\ProjetenPhp\Login\view.php');
require_once ('C:\ProjetenPhp\ProjetenPhp\Login\request.php');
function Login_controller(){
    $view = login_view();
    $request = request_login();
    echo $view;
    echo $request;
}