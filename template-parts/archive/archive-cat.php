<?php 
	
	//Display categories if post has any
	
  $categories = get_the_category();
  $separator = ' ';
  $output = '';
  if ( ! empty( $categories ) ) {

  		echo '<small>Categories: </small>';

      foreach( $categories as $category ) {

          $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;

      }

      echo $output;

      echo '</span>';
  }

?>