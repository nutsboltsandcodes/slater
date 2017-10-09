<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Slater
 */

get_header(); ?>

		<?php
		if ( have_posts() ) : ?>
			
			<!-- Hero Image and Title -->
      <?php get_template_part( 'template-parts/archive/archive', 'hero' );?>
			
			<div class="container center-block">
	      <article class="article">	

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>
				
				<div class="archive-index">
			
						<h1 class="index-headline"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h1>
					
						<p class="index-excerpt"><?php the_excerpt(); ?><!-- Post/Update date -->
        		<?php get_template_part( 'template-parts/post', 'date' );?></p>

					
						<a class="index-link btn" href="<?php the_permalink(); ?>">Take a Look</a>

					</div>

			<?php endwhile; ?>

	    	</article>

			<?php the_posts_navigation();

		endif; ?>

<?php
get_sidebar();
get_footer();
?>
