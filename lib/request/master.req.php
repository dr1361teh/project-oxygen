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

//Request error page with variables
function error($code, $msg, $desc){
    //Get the error page
	require_once('lib/handler/error.php');
	unset($_SESSION['errcode']);
    unset($_SESSION['errmsg']);
    unset($_SESSION['errdesc']);
}

//Debugger access call for browser debug console logging
function debug($msg){
    echo "<script>
    console.log($msg);
    </script>";
}


?>