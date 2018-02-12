<?php
//Post notifications
$query = "INSERT INTO notifications (`name`, `message`, `date`, `user`, `actor`) VALUES ($notif, $notifMsg, $notifDate, $notifUser, $notifActor);";
if(mysqli_query($nconn, $query)){
    returnToURL($uri);
}
?>