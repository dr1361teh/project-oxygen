<?php
//Post notifications
$notif = $_SESSION['notification'];
$notifUser = $_SESSION['user'];
$notifActor = $_SESSION['actor'];
$notifMsg = $_SESSION['message'];
$notifDate = date();
$query = "INSERT INTO notifications (`name`, `message`, `date`, `user`, `actor`) VALUES ($notif, $notifMsg, $notifDate, $notifUser, $notifActor);";
if(mysqli_query($nconn, $query)){
    returnToURL($uri);
}
?>