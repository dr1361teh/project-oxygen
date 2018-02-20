<?php

if(isset($_COOKIE['theme'])){
    $theme = $_COOKIE['theme'];
} else {
    $theme = $config['defaultTheme'];
    setcookie('theme', $theme, 2147483647);
}

?>