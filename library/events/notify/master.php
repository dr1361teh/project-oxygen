<?php
/* 
Notification system using MySQL and not socket.io because node.js is bad lol
*/
$method = $_GET['method'];
$uri = $_GET['url'];

$notif = $_SESSION['notification'];
$for = $_SESSION['user'];
$actor = $_SESSION['actor'];

require('../../connection.php');
if($method === 'post'){
    require('post.php');
}
require('get.php');

function returnToURL($dest){
    unset($notif);
    unset($for);
    unset($actor);
    header("Location: $dest");
}

?>