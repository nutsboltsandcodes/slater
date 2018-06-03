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
      <article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="article__meta">
          <?php
            //Post Categories
            get_template_part( 'template-parts/post/post', 'cat' );
            //Post/update date
            get_template_part( 'template-parts/post/post', 'date' ); 
          ?>
        </div><?php //article__meta ?>
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
        if ( comments_open() || get_comments_number() > 0 ) :
          comments_template();
        endif;
      ?>

    </div>
		
	<?php endwhile; //End of the loop.?>

<?php get_footer(); ?>