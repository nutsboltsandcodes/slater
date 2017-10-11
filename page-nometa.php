<?php /* Template Name: No Meta Template */ ?>
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Slater
 */
?> 

<?php get_header(); ?>

      <?php
  
  //Begin WordPress loop 
  while ( have_posts() ) : the_post(); ?>

    <!-- Single Hero Image and Title -->
    <?php get_template_part( 'template-parts/post/post', 'hero' ); ?>

    <div class="container center-block">
      <article class="article">
        <div class="article__content">
                              <?php the_content(); ?>
        </div><?php //article__content ?>
        <div class="article__meta">
          <?php get_template_part( 'template-parts/post/post', 'tags' ); ?>          
        </div>
      </article><?php //article ?>

      <?php 
        //Display two random read more posts 
        get_template_part( 'template-parts/post/post', 'readmore' );
      ?>

      <?php 
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>

    </div><?php //container ?>
            
      <?php endwhile; //End of the loop.?>

<?php get_footer(); ?>