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
	<?php get_template_part( 'template-parts/frontpage/frontpage', 'hero');	?>


	<div class="container center-block">

      <article class="article article--no-padding">
			
			<?php //Display the Montly Focus Section
			if ( get_theme_mod('slater_monthly_focus_display') == 'Yes') { ?>
			<article class="article article--no-padding">
  		<div class="monthly-focus__container container center-block">
				<h1 class="monthly-focus__title"><?php echo get_theme_mod('slater_monthly_focus_headline'); ?></h1>
				<a href="<?php echo get_permalink(get_theme_mod('slater_monthly_focus_link')); ?>" class="monthly-focus__desc_link"><p class="monthly-focus__desc"><?php echo get_theme_mod('slater_monthly_focus_text');?></p></a>
			</div>
			</article><!-- #main-article -->
			<?php }	?>

      <article class="article">
			
				<?php get_template_part('template-parts/frontpage/frontpage', 'loop'); ?>

      </article><!-- #main-article -->

  </div><!-- #container -->

<?php
get_sidebar();
get_footer();
?>