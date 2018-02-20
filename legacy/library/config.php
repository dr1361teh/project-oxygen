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
$config['autoLogoutTime'] = 900; // Enter in seconds

//Site Details
$config['version'] = 'PRE-ALPHA 0.0.1'; //Version Control
$config['siteDisabledBypassLevel'] = '1'; //Set the minimum user elevation level required (staff level) to bypass 'Disabled Site' screen | 1 = Regular users cannot access
$config['country'] = 'FRA'; //Country identifier, for example: FRA = France. First three letters (can be found on VATEUD API site)
$config['lang'] = 'fr'; //Default website language to newer users, either 'fr' or 'en'
$config['emailLang'] = 'fr'; //Language to send emails in, cannot be altered by the user

//UI
$config['defaultTheme'] = 'light';


?>