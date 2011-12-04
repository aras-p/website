<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>
<td id="center">

<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<h3>Archives by Month:</h3>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

<h3>Archives by Subject:</h3>
  <ul>
     <?php wp_list_cats(); ?>
  </ul>

</td>

<?php get_footer(); ?>
