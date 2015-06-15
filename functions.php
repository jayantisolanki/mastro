<?php 
/*
 * Theme Name: Mastro
 * Author: jayantisolanki
 * Text Domain: mastro
 */
if ( ! isset( $content_width ) ) {
	$content_width = 796;
}
function mastro_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links');
	add_theme_support( 'post-thumbnails');
	set_post_thumbnail_size( 796, 275, true );
	register_nav_menu( 'primary', __( 'Primary Menu', 'mastro' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'mastro' ) );
	add_theme_support( 'html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );
	add_theme_support( 'post-formats', array('aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery') );
	add_theme_support( 'custom-background', apply_filters( 'twentyfourteen_custom_background_args', array('default-color' => 'f1f1f1',) ) );
	add_theme_support( 'custom-header' );
	$args = array(
		'width'         => 1170,
		'height'        => 250,
	);
	add_theme_support( 'custom-header', $args );
	add_editor_style( get_template_directory_uri() . 'editor-style.css');
}
add_action( 'after_setup_theme', 'mastro_theme_setup' );

/* Scripts and Styles */
function mastro_style() {
	$protocol = is_ssl() ? 'https' : 'http';
	wp_register_style('googleFonts', "$protocol://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic");
	wp_enqueue_style( 'googleFonts');
	wp_enqueue_style( 'mastro_style', get_stylesheet_uri() );
	wp_enqueue_style( 'mastro_responsive', get_template_directory_uri() . '/responsive.css', array( 'jstyle' ));
}
add_action( 'wp_enqueue_scripts', 'mastro_style' );
function mastro_scripts() {
	wp_enqueue_script( 'mastro_modernizr', get_template_directory_uri() . '/js/modernizr.js', true );
	wp_enqueue_script( 'mastro_functions', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), true );
	wp_enqueue_script( 'mastro_general', get_template_directory_uri() . '/js/general.js', true );
	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}
add_action( 'wp_enqueue_scripts', 'mastro_scripts' );
/* Register widget areas. */
function mastro_widgets() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Main sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widgetTitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mastro_widgets' );