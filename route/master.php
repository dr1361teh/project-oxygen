<?php

//Content Types
require('library/getElevation.php');

if(isset($_COOKIE['lang'])){
	$lang = $_COOKIE['lang'];
} else {
	 setcookie('lang', 'en', 2147483647);
	 $lang = $_COOKIE['lang'];
}

if(!isset($_GET['content'])){
	$content = 'dashboard';
} else {
	$content = $_GET['content'];
}
require('library/getCID.php');
if(isset($_GET['register']) && $_GET['register'] === 'true'){
	require('views/register.php');
	die;
}
require('library/siteDisabled.php');

//Language ENGLISH
if($lang === 'en'){
	if(isset($_SESSION['cid']) && $content === 'dashboard'){
		require('views/en/dashboard.php');
	} elseif($content === 'error'){
		require('modules/error.php');
	} elseif(!isset($_SESSION['cid'])){
		require('views/login.php');
	} elseif($_SESSION['cid'] && isset($content)){
		if(file_exists('views/en/'.$content.'.php')){
			require('views/en/'.$content.'.php');
		}else{
			$_SESSION['errcode'] = '0x007';
			$_SESSION['errmsg'] = 'Failed to open page.';
			$_SESSION['errdesc'] = 'The file '.$content.'.php does not exist';
			$_SESSION['fileName'] = $content;
			header('Location: index.php?content=error');
		}
	//if all else above fails:
	} else {
		$_SESSION['errcode'] = '0x006';
		$_SESSION['errmsg'] = 'No content was declared.';
		$_SESSION['errdesc'] = 'Please try again.';
		header('Location: index.php?content=error');
	}	
} elseif($lang === 'fr'){
	if(isset($_SESSION['cid']) && $content === 'dashboard'){
		require('views/fr/dashboard.php');
	} elseif($content === 'error'){
		require('modules/error.php');
	} elseif(!isset($_SESSION['cid'])){
		require('views/login.php');
	} elseif($_SESSION['cid'] && isset($content)){
		if(file_exists('views/fr/'.$content.'.php')){
			require('views/fr/'.$content.'.php');
		}else{
			$_SESSION['errcode'] = '0x007';
			$_SESSION['errmsg'] = 'Impossible d\'ouvrir la page.';
			$_SESSION['errdesc'] = 'Fichier '.$content.'.php n\'existe pas.';
			$_SESSION['fileName'] = $content;
			header('Location: index.php?content=error');
		}
	//if all else above fails:
	} else {
		$_SESSION['errcode'] = '0x006';
		$_SESSION['errmsg'] = 'Impossible d\'ouvrir la page.';
		$_SESSION['errdesc'] = 'Réessayer.';
		header('Location: index.php?content=error');
	}	
}

require('library/footerAlerts.php');
?>
