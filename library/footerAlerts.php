<?php
//Master library for global headers


if($config['siteEnabled'] === 'FALSE'){
	echo '<link rel="stylesheet" href="styles/css/AdminLTE.min.css"><center><h2>the website is currently disabled</h2><p>If you are the owner of the site, you can change this <strong>config.php</strong>.<center>';
	echo '<span style="font-size:12px">site built by <strong>whenofficial</strong></span>';
	die;
}

if($config['debug'] === 'TRUE'){
	echo '<center><strong style="color:red">Alert!</strong> Debug mode is currently activated. You can turn this off in config.php</center>';
}
?>