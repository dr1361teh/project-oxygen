<?php
//Access requests

//Request user language cookie
function reqLanguage($defaultLang){
    if(isset($_COOKIE['lang'])){

    } else {
        // Sets the cookie
         setcookie('lang', $defaultLang, 2147483647);
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
    console.log('$msg');
    </script>";
}


?>