<?php
require_once ('C:\ProjetenPhp\ProjetenPhp\Homepage\Homepage.php');
require_once ('C:\ProjetenPhp\ProjetenPhp\Homepage\request.php');
function handler_homepage(){
    $view = Homepage_controller();
    $request = request_homepage();
    echo $view;
    echo $request;
}