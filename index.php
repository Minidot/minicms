<?php
/*
	MiniCMS
	Copyright (c) 2008 Minidot
*/

// Get the global file.
require("minicms/global.php");

// Get the current page
if(isset($_REQUEST['page'])) {
	$pageinfo = (object) mysql_fetch_array(mysql_query("SELECT * FROM pages WHERE id='".mysql_real_escape_string($_REQUEST['page'])."' LIMIT 1"));
} else {
	$pageinfo = (object) array(
							   'id' => 0,
							   'name' => 'Home',
							   'module' => 'blog',
							   'template' => 'defualt'
							   );
}
echo $pageinfo->name;
?>