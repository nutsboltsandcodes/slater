<?php
/**
 * Template partial for displaying single post categories
 *
 * @link https://developer.wordpress.org/reference/functions/get_the_category/
 *
 * @package Slater
 */
?> 

<?php 
	
	//Display single post categories if any exist	
  $categories = get_the_category();
  $separator  = ' ';
  $output     = '';

  if ( ! empty( $categories ) ) { ?>

  		<small class="article__meta-cat">Categories</small>
  		<span class="article__meta-tags">

      <?php foreach( $categories as $category ) { 
          
          $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'slater' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;

      }

      echo $output; ?>

      </span>
      
  <?php } ?>