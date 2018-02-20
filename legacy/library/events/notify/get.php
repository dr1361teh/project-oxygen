<?php
//Get notifications to be pushed to the UI
require('db.php');
$mycid = $_SESSION['cid'];
$query = "SELECT * FROM notifications WHERE user = '$mycid';";
$getrows = "SELECT COUNT(*) FROM notifications WHERE user = '$mycid';";
if($nconn->query($query)){
    if($notifResult = $nconn->query($getrows)){
        $notif_num_rows_1 = $notifResult->num_rows;
        $_SESSION['notif_rows'] = $notif_num_rows_1;
        $_SESSION['notif_query'] = $query;
    } else {
        $_SESSION['errcode'] = '0x011';
        $_SESSION['errmsg'] = "Could not fetch notifications.";
        $_SESSION['errdesc'] = "Please try again later.";
        header('Location: index.php?content=error');    
        die;
    }
     returnToURL($query);
} else {
    die;
}
?>