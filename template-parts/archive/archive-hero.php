<?php	//Display the hero image and archive title, set a default one if no featured image is set ?>
	
	<div class="hero">
	  <div class="hero__text-container">
	    <h1 class="hero__text-title"><?php echo the_archive_title(); ?></h1>
	    <p class="hero__text-subtitle"><?php echo strip_tags(get_the_archive_description()); ?></p>
	  </div>
	  <div class="hero__image-container">
				<img src="<?php bloginfo('template_directory'); ?>/images/default-hero.jpg" alt="<?php the_title(); ?>" />
		</div>
	</div>