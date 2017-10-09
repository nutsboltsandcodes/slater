<?php	//Display the hero image and archive title, set a default one if no featured image is set ?>
	
	<div class="hero">
	  <div class="hero__text-container">
	    <h1 class="hero__text-title"><?php echo the_archive_title(); ?></h1>
	    <p class="hero__text-subtitle"><?php echo strip_tags(get_the_archive_description()); ?></p>
	  </div>
	  <div class="hero__image-container">
			<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} else { ?>
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/default-hero.jpg" alt="<?php the_title(); ?>" />
				<?php } 
			?>
		</div>
	</div>
