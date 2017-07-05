<?php	
//Display the hero image and post title, set a default one if no featured image is set

while ( have_posts() ) : the_post(); { ?>

	<div class="hero">
	  <div class="hero__text-container">
	    <h1 class="hero__text-title"><?php the_title(); ?></h1>
	    <p class="hero__text-subtitle"><?php echo get_post_meta( get_the_ID(), 'Post Subtitle', true); ?></p>
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

<?php } endwhile; // End of the loop.?>