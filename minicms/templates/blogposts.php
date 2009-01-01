<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$_CMS->sitename?></title>
<? include('headerinc.php'); ?>
<? include('blog-style.php'); ?>
</head>
<body>
<? include('header.php'); ?>
<div id="content" class="content-wide blog">
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
</div>
<? include('footer.php'); ?>
</body>
</html>