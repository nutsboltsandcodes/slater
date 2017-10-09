<?php 

	// The loop
	if ( have_posts() ) : while ( have_posts() ) : the_post(); 

		the_content();
	
	endwhile; else: 
  
    _e( 'Sorry, no posts found! Add some in the Admin dashboard.', 'slater' );

	endif; 

?>