<?php 
/*
 * Theme Name: Mastro
 * Author: jayantisolanki
 * Text Domain: mastro
 */
get_header(); ?>
<?php get_sidebar(); ?>
<div class="siteContent" role="main">
  <article>
    <h1 class="entryTitle"><?php _e( 'Not Found', 'mastro' ); ?></h1>
    <div class="entryContent">
      <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'mastro' ); ?></p>
		<?php get_search_form(); ?>
    </div>
  </article>
</div>
<?php get_footer(); ?>
