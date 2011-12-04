<td id="left">
<div id="sidebar">

<ul>
<li><h2><a href="<?php bloginfo('url'); ?>">tech.blog</a>
<a href="<?php bloginfo('rss2_url'); ?>" rel="alternate" type="application/rss+xml"><img src="http://www.feedburner.com/fb/images/pub/feed-icon16x16.png" alt="" title="Feed" style="vertical-align:middle;border:0"/></a></h2>
<?php include (TEMPLATEPATH . '/searchform.php'); ?>
</li>

<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>

<li>
<h2>Categories</h2>
	<ul>
	<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
	</ul>
</li>

<li>
<h2>Archives</h2>
	<ul>
	<?php wp_get_archives('type=yearly'); ?>
	</ul>
</li>

</ul>
</div>
</td>
