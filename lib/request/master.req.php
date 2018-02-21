<?php
//Access requests

//Request user language cookie
function reqLanguage(){
    if(isset($_COOKIE['lang'])){
        // Sets the data
        $lang = $_COOKIE['lang'];
    } else {
        // Sets the cookie
         setcookie('lang', $config['lang'], 2147483647);
         // Sets the data
         $lang = $_COOKIE['lang'];
    }
}


?>