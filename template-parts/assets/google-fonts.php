<?php 

/*
* Enqueue Google Fonts
*/

function google_fonts() {

	wp_register_style( 'Roboto', '//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i' );
	wp_enqueue_style( 'Roboto' );

}

add_action( 'wp_print_styles', 'google_fonts' );

?>