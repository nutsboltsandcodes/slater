<?php	//Display the hero image and post title, set a default one if no featured image is set ?>
	
	<div class="hero">
	  <div class="hero__text-container">
	    <h1 class="hero__text-title">Houston, we have a problem... 😢</h1>
	    <p class="hero__text-subtitle"><?php esc_html_e( 'Not all those who wander are lost... but we sure are. Where to next?', 'slater' ); ?></p>
	  </div>
	  <div class="hero__image-container">
				<img src="<?php bloginfo('template_directory'); ?>/images/404-2.jpeg" alt="<?php the_title(); ?>">
		</div>
	</div>


