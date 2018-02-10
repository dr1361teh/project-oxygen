<?php
//Post notifications
$query = "INSERT INTO notifications (`notification`, `user`, `actor`) VALUES ($notif, $user, $actor);";
if(mysqli_query($nconn, $query)){
    returnToURL($uri);
}
?>