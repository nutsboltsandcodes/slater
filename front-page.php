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

      <h1 style="text-align: center;">Hi there, my names Wyatt, &amp; I'm </h1>
      <h1 style="text-align: center;">a web designer/developer!</h1>
			
				<?php get_template_part('template-parts/frontpage/frontpage', 'loop'); ?>

      </article><!-- #main-article -->

  </div><!-- #container -->

<?php
get_sidebar();
get_footer();
?>