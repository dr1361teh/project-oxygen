<?php

//Content Types
require('library/getElevation.php');

if(!isset($_GET['content'])){
	$content = 'index';
} else {
	$content = $_GET['content'];
}
require('library/getCID.php');
if(isset($_GET['register']) && $_GET['register'] === 'true'){
	require('views/register.php');
	die;
}
require('library/siteDisabled.php');

if(isset($_SESSION['cid']) && $content === 'index'){
	require('views/admin/index.php');
} elseif($content === 'error'){
	require('modules/error.php');
} elseif(!isset($_SESSION['cid'])){
	require('views/login.php');
} elseif($_SESSION['cid'] && isset($content)){
	if(file_exists('views/admin/'.$content.'.php')){
		require('views/admin/'.$content.'.php');
	}else{
		$_SESSION['errcode'] = '0x007';
		$_SESSION['errmsg'] = 'Failed to open page.';
		$_SESSION['errdesc'] = 'The file '.$content.'.php does not exist';
		header('Location: index.php?content=error');
	}
//if all else above fails:
} else {
	$_SESSION['errcode'] = '0x006';
	$_SESSION['errmsg'] = 'No content was declared.';
	$_SESSION['errdesc'] = 'Please try again.';
	header('Location: index.php?content=error');
}
require('library/footerAlerts.php');
?>