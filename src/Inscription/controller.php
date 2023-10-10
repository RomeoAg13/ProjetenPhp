<?php
require ('.\Inscription\view.php');
require ('.\Inscription\request.php');

function handler_inscription(){
    $view = inscription_view();
    $request = request_inscription();
    echo $view;
    echo $request;

}

