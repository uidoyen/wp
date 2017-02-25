<?php
/**
 * _a functions and definitions
 * @package _a
 */

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux-framework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/redux-framework/sample/sample-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux-framework/sample/sample-config.php' );
}
/**
 * Register Navigations.
 */
function a_register_my_menus() {
	register_nav_menus(array(
	  'primary-menu' => __( 'Primary Menu' ),
	  'secondary-menu' => __( 'Secondary Menu' ),
	  'an-extra-menu' => __( 'An Extra Menu' )
	)
  );
}
add_action( 'init', 'a_register_my_menus' );

/**
 * Register Featured Thumbnail.
 */
add_theme_support( 'post-thumbnails' );

/**
 * Register widget area.
 */
function _a_widgets_init() {
	register_sidebar( array(
		'name'          => 'Primary Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets here.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Secondary Sidebar',
		'id'            => 'sidebar-2',
		'description'   => 'Add widgets here.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
}
add_action( 'widgets_init', '_a_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _a_scripts() {
	wp_enqueue_style( '_a-style', get_stylesheet_uri() );
	wp_enqueue_script( '_a-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	//Enque only when comment form available
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_a_scripts' );

/*
 * truncating excerpt length
 */

add_filter( 'excerpt_length', 'a_excerpt_length' );
function a_excerpt_length( $length ) {
	return 20;
}
