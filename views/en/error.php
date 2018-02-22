<?php ?>
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
        echo "<p><strong>Debug Mode</strong>: The page at ".dirname(__DIR__)."/views/admin/$fileDir.php does not exist! Please check the URL.</p>";
        unset($_SESSION['filename']);
    } ?>
    <p>
    Select an option below:
    </p>
    <a href="index.php?content=index">Home</a> | <a onclick="window.history.go(-1); return false;">Go Back</a>