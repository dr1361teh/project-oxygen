<?php
if ($config['siteEnabled'] === 'FALSE' && $staff < $config['siteDisabledBypassLevel']) {
    echo '<link rel="stylesheet" href="styles/css/AdminLTE.min.css"><center><h2>the website is currently disabled</h2><p>If you are the owner of the site, you can change this <strong>config.php</strong>.<center>';
    echo '<span style="font-size:12px">site built by <strong>whenofficial</strong></span>';
    die;
}
