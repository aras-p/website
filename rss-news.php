<?
header('Content-type: text/xml');
print "<?xml version='1.0' encoding='Windows-1257'?>";
include 'common/rss-common.php';
include 'common/news.php';
?> 
<rss version="2.0">
<channel>
	<title>Aras' webpage news</title>
	<link>http://aras-p.info</link>
	<description>The rare news!</description>
	<lastBuildDate><? print makeDate( $mNews[0] ) ?></lastBuildDate>
	<generator>Aras v20060405</generator>
	<docs>http://blogs.law.harvard.edu/tech/rss</docs>
<?
foreach( $mNews as $n ) {
	print '<item>';
	print '<title>' . strip_tags(trim($n[3])) . '</title>';
	print '<link>http://aras-p.info</link>';
	print '<pubDate>' . makeDate($n) . '</pubDate>';
	print "</item>\n";
}
?>
</channel>
</rss>
