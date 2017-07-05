<?php 
	
	//Display tags if post has any
	
  if ( has_tag() ) {
    echo '<small>Tags: </small>';
    the_tags( '', ' ', '' );
  } 

?>