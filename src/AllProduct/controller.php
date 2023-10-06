<?php
require ('.\AllProduct\view.php');
require ('.\AllProduct\request.php');
function handler_allproducts(){
    $view = allproducts_view();
    $request = request_allproducts();
    echo $view;
    echo $request;
}
