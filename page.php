<?php
/**
 * The page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Slater
 */

?>

<?php get_header(); ?>
	
	<?php 
	
	//Hero Image 
	get_template_part( 'template-parts/page/page', 'hero');

	?>
	
	<?php while ( have_posts() ) : the_post();  ?>

	    <div class="container center-block">

      <article class="article">

        <div class="article__meta">
          
          <!-- Post/Update date -->
          <?php get_template_part( 'template-parts/post/post', 'date' );?>

        </div>

        <div class="article__content">

					<?php the_content(); ?>

        </div><!-- /article content -->

      </article>

    </div>
		
		<?php endwhile; // End of the loop.?>

<?php
get_sidebar();
get_footer();
?>