<?php
session_start();

//Get the router
require('library/config.php');
require('library/connection.php');
require('route/master.php');


//LEGACY
//Check if localhost
if($_SERVER['REMOTE_ADDR'] === '::1' || '127.0.0.1' || 'localhost'){
    if($_SERVER['REMOTE_ADDR'] === '::1'){
        $ipaddr = '127.0.0.1';
    } else {
        $ipaddr = $_SERVER['REMOTE_ADDR'];
    } 
    echo '<center><b>Server</b>: Running on '.$ipaddr.' on '.$_SERVER['HTTP_USER_AGENT'].'</center>';
}

?>
