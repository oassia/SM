<?php

$mysql_username="smadmin";
$mysql_password="smadmin1";
$mysql_databasename='sm';
$mysql_server="localhost";

// Connecting, selecting database
$mysql_link = mysql_connect($mysql_server,$mysql_username,$mysql_password)
							or die('Could not connect: ' . mysql_error());
mysql_select_db($mysql_databasename) or die('Could not select database');

?>
