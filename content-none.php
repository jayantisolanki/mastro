<?php
/*
 * Theme Name: Mastro
 * Author: jayantisolanki
 * Text Domain: mastro
 */
?>
<article>
<h1 class="entryTitle"><?php _e( 'Nothing Found', 'twentyfourteen' ); ?></h1>
<div class="entryContent">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php _e( 'Ready to publish your first post?', 'mastro' ); ?></p>
	<?php elseif ( is_search() ) : ?>
	<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'mastro' ); ?></p>
	<?php get_search_form(); ?>
	<?php else : ?>
	<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mastro' ); ?></p>
	<?php get_search_form(); ?>
	<?php endif; ?>
</article>
</div>
