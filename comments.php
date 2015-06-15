<?php
/*
 * Theme Name: Mastro
 * Author: jayantisolanki
 * Text Domain: mastro
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments">
	<?php if ( have_comments() ) : ?>
        <h2 class="comments-title"><?php _e( 'Comments', 'mastro' ); ?></h2>
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'      => 'ul',
                    'avatar_size'=> 50,
                ) );
            ?>
        </ol><!-- .comment-list -->
        <?php paginate_comments_links(); ?> 
        <?php if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php _e( 'Comments are closed.', 'mastro' ); ?></p>
        <?php endif; ?>
	<?php endif; // have_comments() ?>
	<?php comment_form(); ?>
</div><!-- #comments -->
