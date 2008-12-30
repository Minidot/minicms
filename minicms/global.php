<?php
/*
	MiniCMS
	Copyright (c) 2008 Minidot
*/

// Get the config file
require("config.php");

// Connect to the DB
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname);
?>