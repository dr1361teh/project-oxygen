<?php
//Get the router
require('route/master.php');

//Check if accessed via localhost (testing server)
if($_SERVER['REMOTE_ADDR'] = '0.0.0.1' || '127.0.0.1' || '::1' || 'localhost'){
    echo '<b>Disclaimer</b>: This website is being run on <i>localhost</i> (test server on local machine). IP address: '.$_SERVER['REMOTE_ADDR'];
}
?>