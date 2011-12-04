<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>
<center>

<div id="header">
<table id="nav" cellspacing='0' cellpadding='0' border='0'>
<tr>
	<td id="headdesc">Aras' website:</td>
	<td><a href="<?php bloginfo('url'); ?>/../index.html">home</a></td>
	<td><a href="<?php bloginfo('url'); ?>/../texts/index.html">papers</a></td>
	<td><a class="active" href="<?php bloginfo('url'); ?>">tech.blog</a></td>
	<td><a href="<?php bloginfo('url'); ?>/../proj.html">projects</a></td>
	<!--<td><a href="<?php bloginfo('url'); ?>/../blogas">life.blog</a></td>-->
	<td><a href="<?php bloginfo('url'); ?>/../cv.html">cv</a></td>
</tr>
</table>
</div>

<div id="container">
<table cellpadding='0' cellspacing='0' border='0'>
<tr valign='top'>