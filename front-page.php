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

      <article class="article">
			
				<?php get_template_part('template-parts/frontpage/frontpage', 'loop'); ?>

      </article><!-- #main-article -->

  </div><!-- #container -->

<?php get_footer(); ?>