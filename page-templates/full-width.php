<?php 
/*
 * Theme Name: Mastro
 * Author: jayantisolanki
 * Text Domain: mastro
 */
/* Template Name: Full Width */
get_header(); ?>

<div class="siteContent fullWidth" role="main">
  <?php while ( have_posts() ) : the_post();
    get_template_part( 'content', 'page' );
  endwhile; ?>
</div>
<?php

get_footer();
?>
