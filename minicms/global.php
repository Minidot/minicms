<?php
/*
	MiniCMS
	Copyright (c) 2008-2009 Minidot
*/

// Get the config file
require("config.php");

// Connect to the DB
mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
?>