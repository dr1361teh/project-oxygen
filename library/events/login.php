<?php
require('../config.php');
require('../connection.php');


//Log In
$stmt = $conn->prepare("INSERT INTO users (`lastlogin`, `lastip`) VALUES (?, ?, ?, ?);");
$stmt->bind_param("is", $lastlogin, $lastip);

$lastlogin = time();
$lastip = $_SERVER['REMOTE_ADDR'];
$stmt->execute();

?>