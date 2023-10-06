<?php
require ('./SavoirPlus/view.php');
require ('./SavoirPlus/request.php');
function handler_savoirplus(){
    $view = savoirplus_view();
    $request = request_savoirplus();
    echo $view;
    echo $request;
}