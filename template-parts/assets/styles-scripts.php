<?php 

/**
 * Enqueue scripts and styles.
 */

function slater_scripts() {

	wp_register_style( 'slater_main', get_template_directory_uri() . '/dist/css/minified/main.css', array(), false );
	wp_register_script('slater-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_register_script( 'slater_main', get_template_directory_uri() . '/dist/js/main.js', array(), false );
	wp_register_script( 'slater_prism', get_template_directory_uri() . '/dist/js/prism.js', array(), true );

	wp_enqueue_style( 'slater-style', get_stylesheet_uri() );
	wp_enqueue_style( 'slater_main' );	
	wp_enqueue_script( 'slater-skip-link-focus-fix' );
	wp_enqueue_script( 'slater_main' );
	wp_enqueue_script( 'slater_prism' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}

add_action( 'wp_enqueue_scripts', 'slater_scripts' );

?>