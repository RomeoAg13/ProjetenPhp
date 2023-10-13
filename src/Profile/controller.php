<?php
require('.\Profile\view.php');
require_once('.\Profile\request.php');

function handler_profile(){
    $view = profile_view();
    $request = request_profile();
    echo $view;
    echo $request;
}