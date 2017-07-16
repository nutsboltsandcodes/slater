<?php
/**
 * This template is called if a user ends up on a page that does not exist
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Slater
 */
?> 

<?php get_header(); ?>

	  <!-- Single Hero Image and Title -->
    <?php get_template_part( 'template-parts/404/404', 'hero' ); ?>

    <div class="container center-block">
      <article class="article">

        <div class="article__content">
					<h2 class="text-center">We can try <strong>Searching</strong> our way out?</h2>
          <?php get_search_form(); ?>
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