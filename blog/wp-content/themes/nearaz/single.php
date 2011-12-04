<?php get_header(); ?>

<?php get_sidebar(); ?>
<td id="center">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="navigation">
		<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
		<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
	</div>

	<div class="post" id="post-<?php the_ID(); ?>">
		<h3><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h3>

		<div class="entry">
			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

			<p class="postmetadata alt">
				<small>
					Posted on <?php the_time() ?>
					under <?php the_category(', ') ?>. Comments feed <?php comments_rss_link('here'); ?>.

					<?php if (!('open' == $post-> comment_status)) {?>
						Comments are currently closed.
					<?php } edit_post_link('Edit.','',''); ?>

				</small>
			</p>

		</div>
	</div>

<?php comments_template(); ?>

<?php endwhile; else: ?>

	<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</td>

<?php get_footer(); ?>
