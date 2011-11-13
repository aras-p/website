<html>
<head>
	<meta content="text/html; charset=windows-1257" http-equiv="Content-Type">
	<title>Aras' page - <?echo $title?></title>
	<link href="<?echo $basedir?>style.css" rel="stylesheet" type="text/css">
	<link rel="alternate" type="application/rss+xml" title="Aras' website news" href="<?echo $basedir?>rss-news.php" />
</head>
<body>
<center>
<div id="header">
	<table id="nav" cellspacing='0' cellpadding='0' border='0'>
	<tr>
	<td id="headdesc">Aras' website:</td>
	<td><a <? if($section=='home') echo 'class="active"' ?> href="<?echo $basedir?>index.html">home</a></td>
	<td><a <? if($section=='text') echo 'class="active"' ?> href="<?echo $basedir?>texts/index.html">papers</a></td>
	<td><a <? if($section=='blog') echo 'class="active"' ?> href="<?echo $basedir?>blog">tech.blog</a></td>
	<td><a <? if($section=='proj') echo 'class="active"' ?> href="<?echo $basedir?>proj.html">projects</a></td>
	<!--<td><a <? if($section=='blogas') echo 'class="active"' ?> href="<?echo $basedir?>blogas">life.blog</a></td>-->
	<td><a <? if($section=='cv') echo 'class="active"' ?> href="<?echo $basedir?>cv.html">cv</a></td>
	</tr>
	</table>
</div>

<div id="container">
	<div id="center">
	