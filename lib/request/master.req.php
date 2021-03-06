<?php
//Access requests

//Request user language cookie
function reqLanguage($defaultLang){
    if(isset($_COOKIE['lang'])){
        xlog('Language cookie already exists, continue...');
    } else {
        // Sets the cookie
         setcookie('lang', $defaultLang, 2147483647);
         xlog('Set language cookie');
    }
}

//Request error page with variables
function error($code, $msg, $desc){
    //Get the error page
	require_once('lib/handlers/error.php');
	unset($_SESSION['errcode']);
    unset($_SESSION['errmsg']);
    unset($_SESSION['errdesc']);
    xlog('Error handler activated');
}

//Debugger access call for browser debug console logging
function debug($msg){
    echo "<script>
    console.log('$msg');
    </script>";
}

function xlog($msg){
    $path = 'model/log/log-'.$_COOKIE['PHPSESSID'].'.txt';
    if(file_exists($path)){
        $message = '['.date('D j M Y H:i:s', time()).'] '.$msg.' | '.$_SERVER['REMOTE_ADDR']."\n";
        file_put_contents($path, $message, FILE_APPEND);
    } else {
        fopen($path, "w");
        $message = '['.date('D j M Y H:i:s', time()).'] '.$msg.' | '.$_SERVER['REMOTE_ADDR']."\n";
        file_put_contents($path, $message, FILE_APPEND);
    }
}

function getDebug(){
    if($config['debugMode'] === 'true'){
        $debugMode = true;
    } else {
        $debugMode = false;
    }
}

function closeDebug(){
    if(isset($debugMode)){
        unset($debugMode);
    }
}

function alink($href, $title, $target){
    echo "<a href='index.php?link=$href' target='_$target'>$title</a>";
}


?>