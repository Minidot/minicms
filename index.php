<?php
/*
	MiniCMS
	Copyright (c) 2008-2009 Minidot
*/

// Get the global file.
require("minicms/global.php");

// Get the current page
if(isset($_REQUEST['page'])) {
	$pageinfo = (object) mysql_fetch_array(mysql_query("SELECT * FROM pages WHERE id='".mysql_real_escape_string($_REQUEST['page'])."' LIMIT 1")) or die(mysql_error());
} else {
	$pageinfo = (object) array(
							   'id' => 0,
							   'name' => $_CMS->defaultpage->name,
							   'module' => $_CMS->defaultpage->module,
							   'template' => $_CMS->defaultpage->template
							   );
}

// Get the page module
require("minicms/modules/".$pageinfo->module.".php");
?>