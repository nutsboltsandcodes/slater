<?php
/**
 * Template partial for displaying single post tags
 *
 * @link https://codex.wordpress.org/Function_Reference/the_tags
 *
 * @package Slater
 */
?> 

<?php 
	
	//Display tags if post has any	
  if ( has_tag() ) {
    echo '<small class="article__meta-date">Tags</small>';
    the_tags( '<span class="article__meta-tags">', '', '</span>' );
  } 

?>