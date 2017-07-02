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
      <?php get_template_part( 'template-parts/archive', 'hero' );?>
			
			<div class="container center-block">
	      <article class="article">	

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				<h1><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<p><?php the_excerpt(); ?></p>

			<?php endwhile; ?>

	    	</article>

			<?php the_posts_navigation();

		endif; ?>

<?php
get_sidebar();
get_footer();
?>
