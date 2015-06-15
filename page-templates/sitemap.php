<?php 
/*
 * Theme Name: Mastro
 * Author: jayantisolanki
 * Text Domain: mastro
 */
  /*** Template Name: Sitemap  */

get_header(); ?>
<?php get_header(); ?>
<div class="siteContent" role="main">
<?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <?php if ( has_post_thumbnail() ) { ?>
    <div class="postThumbnail"><?php the_post_thumbnail(); ?></div>
<?php } ?>
  <h1 class="entryTitle"><?php the_title(); ?></h1>
  <div class="entryContent">
    <h2 id="pages">Pages</h2>
    <ul>
      <?php // Add pages you'd like to exclude in the exclude here
            wp_list_pages(array('exclude' => '','title_li' => '',));?>
    </ul>
  </div>
  <div class="entryMeta">
    <span class="entryEdit"> <i class="fa fa-pencil"></i> <?php edit_post_link('Edit'); ?>  </span>
  </div>
</article>
<?php endwhile; ?>
</div>
<?php
get_sidebar();
get_footer();
?>
<?php get_footer(); ?>
