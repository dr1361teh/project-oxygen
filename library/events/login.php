<?php
session_start();
require '../config.php';
require '../connection.php';

$cid = $_POST['cid'];
$pwd = $_POST['password'];
$apwd = md5($pwd);
if (!isset($pwd)) {
    header('Location: ../../index.php');
} elseif (!isset($cid)) {
    header('Location: ../../index.php');
}

//Log In
$sql = "SELECT * FROM users WHERE cid = :cid;";
$query = $conn->prepare($sql);

$query->execute(array(
    ':cid' => $cid,
));
$rowCount = $query->rowCount();
$rows = $query->fetch(PDO::FETCH_ASSOC);

//Check if account exists
if ($rowCount >= 1) {

    $password = $rows['password'];
    $email = $rows['email'];
    //Check if password matches
    if ($apwd == $password) {
        //Log In & set session variables
        $_SESSION['cid'] = $cid;
        $_SESSION['email'] = $email;

        $sql2 = "UPDATE users SET `lastlogin` = :lastlogin, `lastip` = :lastip WHERE `cid` = :cid;";
        $query2 = $conn->prepare($sql2);
        $lastlogin = time();
        $lastip = $_SERVER['REMOTE_ADDR'];
        $query2->execute(array(
            ':lastlogin' => $lastlogin,
            ':lastip' => $lastip,
            ':cid' => $cid,
        ));
        //Set tables

        header('Location: ../../index.php?content=dasbhoard');
    } else {
        $_SESSION['wrongPassword'] = 'Incorrect password for ' . $cid;
        header('Location: ../../index.php');
    }
} else {
    $_SESSION['noMatch'] = $cid . ' does not exist!';
    header('Location: ../../index.php');
}
