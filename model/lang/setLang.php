<?php
//Set user language based on button click on header

$lang = $_GET['lang'];

setcookie('lang', $lang, 2147483647);

header('Location: ../../index.php?content=index');

return;
?>