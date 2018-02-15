<?php
if(!isset($_SESSION['errcode'])){
    $_SESSION['errcode'] = '0x003';
    $_SESSION['errmsg'] = 'No valid or set error code is set.';
    $_SESSION['errdesc'] = 'You are trying to access error.php with no error code to display';
} elseif(!isset($_SESSION['errmsg'])){
    $_SESSION['errcode'] = '0x004';
    $_SESSION['errmsg'] = 'No valid or set error message is set.';
    $_SESSION['errdesc'] = 'You are trying to access error.php with no error message to display';
} elseif(!isset($_SESSION['errdesc'])){
    $_SESSION['errcode'] = '0x005';
    $_SESSION['errmsg'] = 'No valid or set error description is set.';
    $_SESSION['errdesc'] = 'You are trying to access error.php with no error description to display';
}
?>

<link rel="stylesheet" href="styles/css/AdminLTE.min.css">
<h2 style='color:red'>Error</h2>
    <h3>ERRCODE: 
        <strong><?php echo $_SESSION['errcode'];?></strong>
    </h3>
    <p><?php echo $_SESSION['errmsg'];?>
        <strong><?php echo $_SESSION['errdesc'];?></strong>
    </p>
    <?php if($_SESSION['errcode'] === '0x007'){
        $fileDir = $_SESSION['fileName'];
        echo "<p><strong>Debug Mode</strong>: The file ".dirname(__DIR__)."/views/admin/$fileDir.php does not exist! Please check the URL.</p>";
        unset($_SESSION['filename']);
    } ?>
    <p>
    Do not reload this page!
    </p>
    <a href="index.php">Home</a> | <a onclick="window.history.go(-1); return false;">Go Back</a>
 <?php
        if($_SESSION['errcode'] === '0x002'){
            session_destroy();
        }
    unset($_SESSION['errcode']);
    unset($_SESSION['errmsg']);
    unset($_SESSION['errdesc']);
 ?>