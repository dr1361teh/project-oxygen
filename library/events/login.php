<?php
session_start();
require('../config.php');
require('../connection.php');

//Declare variables
$cid = $_POST['cid'];
$pwd = $_POST['password'];
$apwd = md5($pwd);

//Log In
$stmt = $conn->prepare("SELECT * FROM users WHERE cid = ?");
$stmt->bind_param("i", $cid);
$stmt->execute();
$result = $stmt->get_result();


//Check if account exists
if($result->num_rows >= 1){

    while($rows = $result->fetch_assoc()){
    $password = $rows['password'];
    $email = $rows['email'];
    }

    //Check if password matches
    if($apwd == $password){
        //Log In & set session variables
        $_SESSION['cid'] = $cid;
        $_SESSION['email'] = $email;
        //Set tables
        $lastlogin = time();
        $lastip = $_SERVER['REMOTE_ADDR'];

        $stmt = $conn->prepare("INSERT INTO users (`lastlogin`, `lastip`) VALUES (?, ?);");
        $stmt->bind_param("is", $lastlogin, $lastip);

        $stmt->execute();

        header('Location: admin/index.php');
    } else {
        $_SESSION['wrongPassword'] = 'Incorrect password for '.$cid;
        header('Location: ../../index.php');
    }
} else {
    $_SESSION['noMatch'] = 'A user with that CID does not exist!';
    header('Location: ../../index.php');
}

?>