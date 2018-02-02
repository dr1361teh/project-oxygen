<?php
//Get the router
require('route/master.php');

//Check if accessed via localhost (testing server)
if($_SERVER['REMOTE_ADDR'] = '0.0.0.1' || '127.0.0.1' || '::1' || 'localhost'){
    echo '<b>Disclaimer</b>: IP address: '.$_SERVER['REMOTE_ADDR'].' (test access)';
}
?>