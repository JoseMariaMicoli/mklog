<?php
$host = "127.0.0.1";
$user = "syslogng";
$pass = "SyS10g-Ng!";
$database = "syslogng";
$connection = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($database) or die(mysql_error());
?>
