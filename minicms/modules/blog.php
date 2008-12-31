<?php
/*
	MiniCMS Blog Module
	Copyright (c) 2008 Minidot
*/

// Get posts
$getposts = mysql_query("SELECT * FROM blogposts ORDER BY timestamp DESC") or die(mysql_error());
while($postinfo = mysql_fetch_array($getposts)) {
	$posts[] = (object) $postinfo;
}
require("minicms/templates/".$pageinfo->template.".php")
?>