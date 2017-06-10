<?php	//Display the hero image and post title, set a default one if no featured image is set ?>
	
	<div class="hero">
	  <div class="hero__text-container">
	    <h1 class="hero__text-title"><?php the_title(); ?></h1>
	    <p class="hero__text-subtitle">So begins my web development journey begins my web development.</p>
	    <p class="hero__text-meta">Time: 4 minutes</p>
	  </div>
	  <div class="hero__image-container">
		<?php 
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/images/default-hero.jpg" alt="<?php the_title(); ?>" />
			<?php } 
		?>
		</div>
	</div>


