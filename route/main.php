<?php
session_start();

$request = explode('?', $_SERVER['REQUEST_URI'], 2);

//route
swith($request[0]){
    case '/':
        require '../index.php';
}

?>