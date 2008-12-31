<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
foreach($posts as $post) {
?>
<div class="post">
	<h3><?=$post->title?></h3>
	<div class="post-meta"><?=date("g:ia j/n/Y",$post->timestamp)?></div>
	<div class="post-content">
		<?=nl2br(stripslashes($post->content))?>
	</div>
</div>
<hr class="hidden" />
<?
}
?>
</body>
</html>