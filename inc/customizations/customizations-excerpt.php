<?php 

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function slater_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'slater_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function slater_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'slater_excerpt_more' );

?>