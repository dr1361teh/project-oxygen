<?php
//Get list of current active approved controllers for views/controllerroster.php
require('connection.php');

if($result = $conn->query("SELECT * FROM users WHERE approved='1';")){
    
} else {
    echo 'Failed to query';
    die;
}
?>