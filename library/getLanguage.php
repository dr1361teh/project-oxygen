<?php
//Gets the language cookie to determine the user-set language preference (default set in config.php)
$defaultLanguage = $config['lang'];
if(isset($_COOKIE['lang'])){
	$lang = $_COOKIE['lang'];
} else {
	 setcookie('lang', $defaultLanguage, 2147483647);
	 $lang = $_COOKIE['lang'];
}

?>