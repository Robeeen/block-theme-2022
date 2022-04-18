<?php

if ( ! function_exists( 'block_theme' ) ) :
	function emptytheme_support()  {

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
	add_action( 'after_setup_theme', 'block_theme' );
endif;

/**
 * Enqueue scripts and styles.
 */

 function block_theme_scripts() {
	// Enqueue theme stylesheet.
	wp_enqueue_style( 'block_theme-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'block_theme_scripts' );

