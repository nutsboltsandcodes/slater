<?php	//Display the hero image and post title, set a default one if no featured image is set ?>
	
	<div class="hero">
	  <div class="hero__text-container">
	    <h1 class="hero__text-title">You Searched For: <?php echo get_search_query(); ?></h1>
	    <p class="hero__text-subtitle"><?php esc_html_e( 'Heres what I found.', 'slater' ); ?></p>
	  </div>
	  <div class="hero__image-container">
				<img src="<?php bloginfo('template_directory'); ?>/images/404-2.jpeg" alt="<?php the_title(); ?>">
		</div>
	</div>


