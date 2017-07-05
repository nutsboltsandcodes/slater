<?php 

/*
 * Modify Admin Footer Text
 */

function modify_footer() {

	echo 'Created with love by <a href="mailto:wyatt.castaneda@gmail.com">Wyatt</a> :).';

}

add_filter( 'admin_footer_text', 'modify_footer' );

 ?>