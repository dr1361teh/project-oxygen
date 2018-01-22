<?php
$config = require('config.php');
$conn = new mysqli($config['dbHost'], $config['dbName'], $config['dbPass'], $config['dbName']) or die(error);

?>