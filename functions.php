<?php
/**
 * Block Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage n/a
 * @since n/a
 */

if ( ! function_exists( 'blocktheme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function blocktheme_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

	}

endif;

add_action( 'after_setup_theme', 'blocktheme_support' );


/**
 * Enqueue scripts and styles.
 */

 function blocktheme_styles() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'blocktheme-style', get_template_directory_uri() . '/style.css', wp_get_theme()->get( 'Version' ) );

}

add_action( 'wp_enqueue_scripts', 'blocktheme_styles' );

