<?php
/**
 * The front-page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Slater
 */

?>

<?php get_header(); ?>
	
	<?php //Hero image template part ?>
	<?php get_template_part( 'template-parts/frontpage', 'hero');	?>
	

	<?php 

	// The loop
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
		<div class="monthly-focus__container container center-block">
			<h1 class="monthly-focus__title">July Monthly Focus!</h1>
			<a href="#" class="monthly-focus__desc_link"><p class="monthly-focus__desc">Finish version 1.1 of my custom WordPress theme, <b>Slater</b>!</p></a>
		</div>
		<div class="container center-block">
			<?php the_content(); ?>
		</div>
<?php endwhile; else: ?>
    <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
<?php endif; ?>
	


<?php
get_sidebar();
get_footer();
?>