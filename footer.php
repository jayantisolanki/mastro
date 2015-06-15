<?php 
/*
 * Theme Name: Mastro
 * Author: jayantisolanki
 * Text Domain: mastro
 */
?>
</div>
</main><!-- .site-main -->
<footer id="footer">
	<div class="container">
    	<?php if ( has_nav_menu( 'footer' ) ) : ?>
        <nav id="footerLinks" class="footerLinks" role="navigation">
          <?php
                // Social links navigation menu.
                wp_nav_menu( array('theme_location' => 'footer', 'depth' => 1 ));
            ?>
        </nav>
        <?php endif; ?>
    	<div class="siteInfo" role="contentinfo"><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mastro' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'mastro' ), 'WordPress' ); ?></a> </div>
    </div>
  </footer>
</div>
<a href="#top" title="Back to Top" id="backtotop">Back to Top</a>
<?php wp_footer(); ?>
</body>
</html>