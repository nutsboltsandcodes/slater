<?php
/**
 * Template Name: Search Page
 *
 * This template is called for displaying search results
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Slater
 */
?> 

<?php get_header(); ?>

    <!-- Single Hero Image and Title -->
    <?php get_template_part( 'template-parts/search/search', 'hero' ); ?>

    <div class="container center-block">
      <article class="article">

        <div class="article__content">

          <?php if ( have_posts() ) : ?>

                <h2 class="text-center">Shall we <strong>Search</strong> again?</h2>
                <?php get_search_form(); ?>
                <hr>
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                
                  <div class="archive-index">
        
                    <h1 class="index-headline"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  
                    <p class="index-excerpt"><?php echo get_the_excerpt(); ?></p>

                  
                    <a class="index-link btn" href="<?php the_permalink(); ?>">Take a Look</a>

                  </div>
                   

                <?php endwhile; ?>              

            <?php else : ?>
                
                <h2 class="text-center">A real head stumper, no results found.</h2>
                <h2 class="text-center">Shall we <strong>Search</strong> again?</h2>
                <?php get_search_form(); ?>

            <?php endif; ?>

        </div><?php //article__content ?>
        <div class="article__meta">
          
        </div>
      </article>

      <?php 
        //Display two random read more posts 
        get_template_part( 'template-parts/post/post', 'readmore' );
      ?>

    </div><?php //container ?>

<?php get_footer(); ?>