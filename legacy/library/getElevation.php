<?php
$cid = $_SESSION['cid'];
//Get staff elevation
$query = mysqli_query($nconn, "SELECT * FROM users WHERE cid='$cid';");
if($query){
    while($elevationrows = $query->fetch_assoc()){
        $staff = $elevationrows['staff'];
    }
} else {
    echo 'Failed to get staff elevation.';
    die;
}
?>