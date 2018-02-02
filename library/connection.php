<?php
require('config.php');
$host = $config['dbHost'];
$user = $config['dbUser'];
$pass = $config['dbPass'];
$db = $config['dbName'];

$conn = new PDO("mysql:host=$host;dbname=$db", "$user", "$pass") or die;

?>