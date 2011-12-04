<?php get_header(); ?>

<?php get_sidebar(); ?>
<td id="center">

<?php if (have_posts()) : ?>

	<h2 class="pagetitle">Search Results for <strong>'<?php echo wp_specialchars($s); ?>'</strong></h2>

	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
	</div>


	<?php while (have_posts()) : the_post(); ?>

		<div class="post">
			<h4 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h4>

			<small class="postmetadata">Posted on <?php the_time() ?> in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></small>
		</div>

	<?php endwhile; ?>

	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
	</div>

<?php else : ?>

	<h2 class="center">No posts found. Try a different search?</h2>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<?php endif; ?>

</td>

<?php get_footer(); ?>