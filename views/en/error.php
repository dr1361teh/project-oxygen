<?php
if(!isset($code)){
    $code = '0x003';
    $msg = 'No valid or set error code is set.';
    $desc = 'You are trying to access error.php with no error code to display';
} elseif(!isset($msg)){
    $code = '0x004';
    $msg = 'No valid or set error message is set.';
    $desc = 'You are trying to access error.php with no error message to display';
} elseif(!isset($desc)){
    $code = '0x005';
    $msg = 'No valid or set error description is set.';
    $desc = 'You are trying to access error.php with no error description to display';
}
?>

<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
<h2 style='color:red'>Error</h2>
    <h3>ERRCODE: 
        <strong><?php echo $code;?></strong>
    </h3>
    <p><?php echo $msg;?>
        <strong><?php echo $desc;?></strong>
    </p>
    <?php if($code === '0x007'){
        $fileDir = $_SESSION['fileName'];
        echo "<p><strong>Debug Mode</strong>: The file ".dirname(__DIR__)."/views/admin/$fileDir.php does not exist! Please check the URL.</p>";
        unset($_SESSION['filename']);
    } ?>
    <p>
    Select an option below:
    </p>
    <a href="index.php">Home</a> | <a onclick="window.history.go(-1); return false;">Go Back</a>
 <?php
        if($code === '0x002'){
            session_destroy();
        }
 ?>