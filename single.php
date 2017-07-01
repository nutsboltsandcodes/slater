<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Slater
 */

get_header(); ?>

		<?php
		while ( have_posts() ) : the_post(); 
    slater_set_post_views(get_the_ID());
    ?>


      <!-- Hero Image and Title -->
      <?php get_template_part( 'template-parts/post', 'hero' );?>

	    <div class="container center-block">

      <article class="article">

        <div class="article__meta">
          
          <!-- Post tags -->
          <?php get_template_part( 'template-parts/post', 'tags' );?>
          
          <!-- Post/Update date -->
          <?php get_template_part( 'template-parts/post', 'date' );?>

        </div>

        <div class="article__content">

					<?php the_content(); ?>

        </div><!-- /article content -->

        <div class="article__meta">

          <!-- Post Categories -->
          <?php get_template_part( 'template-parts/post', 'cat' );?>          
      
        </div>

      </article>

      <?php // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif; ?>

    </div>
		
		<?php endwhile; // End of the loop.?>

<?php get_footer(); ?>
