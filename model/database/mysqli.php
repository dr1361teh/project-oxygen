<?php
//MySQLi Database Init
if($sqli = new mysqli($config['dbHost'], $config['dbUser'], $config['dbPass'], $config['dbName'])){

} else {
    echo 'Unable to create a connection to the MySQLi database. Please try again later, or if you are the webmaster, please check your entries in <i>config.php</i>';
}

?>