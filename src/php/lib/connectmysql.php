<?php

require_once("config.php");

$connection = mysql_connect($host, $user, $pass) or
die("I couldn't connect to Server. So sad :( " . mysql_error());

mysql_select_db($database, $connection) or
die("I can't connect to Database. So sad :( " . mysql_error());