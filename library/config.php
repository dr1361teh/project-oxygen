<?php
//vatfrance configuration file

//Database
$config['dbHost'] = 'localhost';
$config['dbUser'] = 'root';
$config['dbPass'] = '';
$config['dbName'] = 'vatfrance';

//Modes
$config['debug'] = 'TRUE'; //Debug Mode - FALSE (off), TRUE (on) | DO NOT LEAVE THIS ENABLED FOR LIVE SITE!
$config['siteEnabled'] = 'TRUE'; //Enable website for everyone

//Site Details
$config['version'] = 'PRE-ALPHA 0.0.1'; //Version Control
$config['siteDisabledBypassLevel'] = '1'; //Set the minimum user elevation level required (staff level) to bypass 'Disabled Site' screen | 1 = Regular users cannot access

//UI
$config['defaultTheme'] = 'light';

?>