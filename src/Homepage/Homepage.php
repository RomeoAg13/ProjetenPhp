<?php


function Homepage_controller(){
    echo "
    
        <h1>Bienvenue sur la homepage</h1>
        <style>
        h1{
            color:red;
        }
        </style>
        <a href='/Login' >LOGIN</a>
        <a href='/Panier' >PANIER</a>
    
    ";
    
}