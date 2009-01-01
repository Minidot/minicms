<?php
/*
	MiniCMS
	Copyright (c) 2008-2009 Minidot
*/

// CMS Settings
$_CMS = (object)
		array(
			  'sitename' => 'miniCMS'
			  );

// Default Page Settings
$_CMS->defaultpage = (object)
						array(
							  'name' => "Blog",
							  'module' => 'blog',
							  'template' => 'blogposts'
							  );

// Database Info
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "minicms";
?>