<?php
require('lib/request/master.req.php');
//Get the VATEUD API
require('api/eu.php');

if(isset($_GET['link'])){
	$link = $_GET['link'];
	xlog('Leaving website to external site: '.$link);
	header("Location: $link");
}

//Call requests
reqLanguage($config['defaultLanguage'], null);
if(isset($_SESSION['cid'])){
	getAPI();
	xlog('User has an active session (logged in)');
} else {
	xlog('User not logged in');
}

//Check if the content GET request is set
if(!isset($_GET['action'])){
	if(!isset($_GET['content'])){
		$content = 'index';
	} else {
		$content = $_GET['content'];
	}
} else {
	$action = $_GET['action'];
	$lang = $_GET['lang'];
}


//Language ENGLISH
if($_COOKIE['lang'] === 'en'){
	if(isset($content) && $content === 'index'){
		require('views/en/index.php');
	} elseif($content === 'error'){
		if(isset($_SESSION['errcode'])){
			error($_SESSION['errcode'], $_SESSION['errmsg'], $_SESSION['errdesc']);
		} else {
			header('Location: index.php?content=index');
		}
	} elseif(isset($content)){
		if(file_exists('views/en/'.$content.'.php')){
			require('views/en/'.$content.'.php');
		}else{
			$_SESSION['errcode'] = '0x007';
			$_SESSION['errmsg'] = 'Failed to open page.';
			$_SESSION['errdesc'] = 'The file '.$content.'.php does not exist';
			$_SESSION['fileName'] = $content;
			header('Location: index.php?content=error');
		}
	} elseif(isset($action)){
		if(file_exists('model/'.$action.'.php')){
			require('model/'.$action.'.php');
		}else{
			$_SESSION['errcode'] = '0x007';
			$_SESSION['errmsg'] = 'Failed to open page.';
			$_SESSION['errdesc'] = 'The file '.$action.'.php does not exist';
			$_SESSION['fileName'] = $action;
			header('Location: index.php?content=error');
		}

	//if all else above fails:
	} else {
		$_SESSION['errcode'] = '0x006';
		$_SESSION['errmsg'] = 'No content was declared.';
		$_SESSION['errdesc'] = 'Please try again.';
		header('Location: index.php?content=error');
	}	
//Language FRANCE
} elseif($_COOKIE['lang'] === 'fr'){
	if(isset($content) && $content === 'index'){
		require('views/en/index.php');
	} elseif($content === 'error'){
		if(isset($_SESSION['errcode'])){
			error($_SESSION['errcode'], $_SESSION['errmsg'], $_SESSION['errdesc']);
		} else {
			header('Location: index.php?content=index');
		}
	} elseif(isset($content)){
		if(file_exists('views/en/'.$content.'.php')){
			require('views/en/'.$content.'.php');
		}else{
			$_SESSION['errcode'] = '0x007';
			$_SESSION['errmsg'] = 'Failed to open page.';
			$_SESSION['errdesc'] = 'The file '.$content.'.php does not exist';
			$_SESSION['fileName'] = $content;
			header('Location: index.php?content=error');
		}
	} elseif(isset($action)){
		if(file_exists('model/'.$action.'.php')){
			require('model/'.$action.'.php');
		}else{
			$_SESSION['errcode'] = '0x007';
			$_SESSION['errmsg'] = 'Failed to open page.';
			$_SESSION['errdesc'] = 'The file '.$action.'.php does not exist';
			$_SESSION['fileName'] = $action;
			header('Location: index.php?content=error');
		}
		
	//if all else above fails:
	} else {
		$_SESSION['errcode'] = '0x006';
		$_SESSION['errmsg'] = 'No content was declared.';
		$_SESSION['errdesc'] = 'Please try again.';
		header('Location: index.php?content=error');
	}	
}

// require('library/footerAlerts.php');
?>