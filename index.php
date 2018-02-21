<?php
session_start();

//Get required files
require_once('model/config/config.php');
require_once('router/master.php');
require_once('model/database/mysqli.php');

//Check the client to see if user is running server on localhost
if($_SERVER['REMOTE_ADDR'] === '::1' || '127.0.0.1' || 'localhost'){
    if($_SERVER['REMOTE_ADDR'] === '::1'){
        //Sets the data
        $ipaddr = '127.0.0.1';
    } else {
        //Sets the data
        $ipaddr = $_SERVER['REMOTE_ADDR'];
    } 
    //Echo footer for all pages
    echo '<center><b>Server</b>: Running on '.$ipaddr.' on '.$_SERVER['HTTP_USER_AGENT'].'</center>';
}

?>
