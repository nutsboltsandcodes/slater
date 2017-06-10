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
		while ( have_posts() ) : the_post(); ?>

			<div class="hero">
	      <div class="hero__text-container">
	        <h1 class="hero__text-title"><?php the_title(); ?></h1>
	        <p class="hero__text-subtitle">So begins my web development journey begins my web development.</p>
	        <p class="hero__text-meta">Time: 4 minutes</p>
	      </div>
	      <div class="hero__image-container">
	        <?php // Check if the post has a Post Thumbnail assigned to it.
					if ( has_post_thumbnail() ) {
					    the_post_thumbnail();
					} ?>
	      </div>
	    </div>

	    <div class="container center-block">

      <article class="article">

        <div class="article__meta">
          
          <small class="article__meta-date">Tags</small>
          <!-- Post tags -->
          <span class="article__meta-tags">
            <a href="#" rel="tag">Workflow</a>
            <a href="#" rel="tag">PostCSS</a>
            <a href="#" rel="tag">VidCon 2017</a>
            <a href="#" rel="tag">Snippet</a>
            <a href="#" rel="tag">WordPress</a>
          </span>
          <!-- Post/Update date -->
          <small class="article__meta-date">Updated on: 06 June 2017</small>
        </div>

        <div class="article__content">

					<?php the_content(); ?>

        </div><!-- /article content -->

        <div class="article__meta">
          
          <small class="article__meta-cat">Categories</small>
          <!-- Post tags -->
          <span class="article__meta-tags">
            <a href="#" rel="tag">Workflow</a>
            <a href="#" rel="tag">PostCSS</a>
            <a href="#" rel="tag">VidCon 2017</a>
            <a href="#" rel="tag">Snippet</a>
            <a href="#" rel="tag">WordPress</a>
          </span>
      
        </div>

      </article>

    </div>
		
		<?php 
		endwhile; // End of the loop.
		?>


<?php
get_sidebar();
get_footer();
