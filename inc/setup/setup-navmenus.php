<?php 

function slater_register_nav_menus() {

	register_nav_menus( array(
		'header-menu' 					=> esc_html__( 'Primary', 'slater'),
		'secondary-header-menu' => esc_html__( 'Secondary', 'slater' ),
		'mobile-menu'						=> esc_html__( 'Mobile Menu', 'slater' ),
	) );

}

add_action( 'after_setup_theme', 'slater_register_nav_menus' );

?>