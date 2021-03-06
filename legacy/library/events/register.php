<?php
session_start();
require '../config.php';
require '../connection.php';

$cid = $_POST['cid'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$apwd = md5($pwd);
if (!isset($pwd)) {
    header('Location: ../../index.php');
} elseif (!isset($cid)) {
    header('Location: ../../index.php');
} elseif (!isset($email)) {
    header('Location: ../../index.php');
}
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Log In
$sql = "SELECT * FROM users WHERE cid = :cid;";
$query = $conn->prepare($sql);

$query->execute(array(
    ':cid' => $cid,
));
$rowCount = $query->rowCount();

$sql = "SELECT email FROM users WHERE email = :email;";
$query = $conn->prepare($sql);

$query->execute(array(
    ':email' => $email,
));
$emailCount = $query->rowCount();

//Check if CID is correct length
if (strlen($cid) === 7) {
    //Check if CID input is numeric
    if (is_numeric($cid)) {
        //Check if account exists
        if (!$rowCount >= 1) {

            //Check if password matches
            if (!$emailCount >= 1) {
                //Log In & set session variables

                $sql2 = "INSERT INTO users (cid, email, `password`, regdate, lastip, `enabled`) VALUES (:cid, :email, :pwd, :regdate, :lastip, :ebld);";
                $query2 = $conn->prepare($sql2);
                $regdate = time();
                $lastip = $_SERVER['REMOTE_ADDR'];
                $query2->execute(array(
                    ':cid' => $cid,
                    ':email' => $email,
                    ':pwd' => $apwd,
                    ':regdate' => $regdate,
                    ':lastip' => $lastip,
                    ':ebld' => 0,
                ));
                sendWelcomeEmail($email, $cid);
                //Set tables
                $_SESSION['success'] = 'Application sent.';
                header('Location: ../../index.php?register=true');
            } else {
                $_SESSION['error'] = 'That email is already taken!';
                header('Location: ../../index.php?register=true');
            }
        } else {
            $_SESSION['error'] = $cid . ' is already in use!';
            header('Location: ../../index.php?register=true');
        }
    } else {
        $_SESSION['error'] = 'Your CID must be numeric.';
        header('Location: ../../index.php?register=true');
    }
} else {
    $_SESSION['error'] = 'CID must be 7 characters.';
    header('Location: ../../index.php?register=true');
}

function sendWelcomeEmail($address, $name){
    $subject = 'Welcome to VATFRANCE';
    $message = 'email message here';
    $headers = 'From: hq@vatfrance.org' . "\r\n" .
    'Reply-To: hq@vatfrance.org' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($address, $subject, $message, $headers);
}