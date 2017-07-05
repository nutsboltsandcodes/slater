<?php 

/**
 * Add Lead Class to First Paragraph
 */

function first_paragraph( $content ) {

	return preg_replace( '/<p([^>]+)?>/', '<p$1 class="lead">', $content, 1 );
	
}

add_filter( 'the_content', 'first_paragraph' );

?>