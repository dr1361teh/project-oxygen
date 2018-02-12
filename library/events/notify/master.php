<?php
/* 
Notification system using MySQL and not socket.io because node.js is bad lol
*/


//Send Notifcation
function post(){
    require('post.php');
}

//Get Notifications
require('db.php');
$mycid = $_SESSION['cid'];
$query = "SELECT * FROM notifications WHERE user = '$mycid';";
$getrows = "SELECT * FROM notifications WHERE user = '$mycid';";
if($nconn->query($query)){
    if($notifResult = $nconn->query($getrows)){
        $notifrCount = $notifResult->num_rows;
    } else {
        $_SESSION['errcode'] = '0x011';
        $_SESSION['errmsg'] = "Could not fetch notifications.";
        $_SESSION['errdesc'] = "Please try again later.";
        header('Location: index.php?content=error');    
        die;
    }
     returnToURL($query);
}

function returnToURL($notifNum){
    unset($notif);
    unset($notifUser);
    unset($notifActor);
    unset($notifMsg);
}

?>