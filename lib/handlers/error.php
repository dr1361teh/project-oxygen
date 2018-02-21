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

require_once('views/en/error.php');

        if($code === '0x002'){
            session_destroy();
        }
 ?>