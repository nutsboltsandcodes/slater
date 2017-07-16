<?php 

function slater_register_nav_menus() {

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header-menu' 					=> esc_html__( 'Primary', 'slater'),
		'secondary-header-menu' => esc_html__( 'Secondary', 'slater' ),
	) );

}

add_action( 'after_setup_theme', 'slater_register_nav_menus' );

?>