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

	if ( get_theme_mod('slater_monthly_focus_display') == 'Yes') { ?>
		
		<div class="monthly-focus__container container center-block">
			<h1 class="monthly-focus__title"><?php echo get_theme_mod('slater_monthly_focus_headline'); ?></h1>
			<a href="<?php echo get_permalink(get_theme_mod('slater_monthly_focus_link')); ?>" class="monthly-focus__desc_link"><p class="monthly-focus__desc"><?php echo get_theme_mod('slater_monthly_focus_text');?></p></a>
		</div>

	<?php }	?>
	

	<?php 

	// The loop
	if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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