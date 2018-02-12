<?php
/* 
Notification system using MySQL and not socket.io because node.js is bad lol
*/
$uri = $_GET['url'];

$notif = $_SESSION['notification'];
$notifUser = $_SESSION['user'];
$notifActor = $_SESSION['actor'];
$notifMsg = $_SESSION['message'];
$notifDate = date();

require('../../connection.php');

//Send Notifcation
function post(){
    require('post.php');
}

//Get Notifications
function get(){
    require('get.php');
}

function returnToURL($dest){
    unset($notif);
    unset($notifUser);
    unset($notifActor);
    unset($notifMsg);
    header("Location: $dest");
}

?>