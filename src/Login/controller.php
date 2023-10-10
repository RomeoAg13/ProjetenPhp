<?php
require_once ('.\Login\view.php');
require_once ('.\Login\request.php');

function handler_login(){
    $view = Login_view();
    $request = request_login();
    echo $view;
    echo $request;
}