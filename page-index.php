<?php /* Template Name: Sub-Index */ ?>
<?php
/**
 * The resuable page template for displaying a customized loop
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package Slater
 */

get_header(); ?>

      <?php 
      	//Get the page specific hero image and title block
      	get_template_part( 'template-parts/page/page', 'hero' );
      ?>
			
			<div class="container center-block">
	      <article class="article">	

	      <?php	// The Query
	      $arg = get_post_meta( get_the_ID(), 'LoopCateroryQuery', true);

				$the_query = new WP_Query( array( 'category_name' => $arg ) );

				// The Loop
				if ( $the_query->have_posts() ) {

					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						<div class="archive-index">
				
							<h1 class="index-headline"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h1>
						
							<p class="index-excerpt"><?php the_excerpt(); ?></p>

						
							<a class="index-link btn" href="<?php the_permalink(); ?>">Take a Look</a>

						</div>

					<?php }		

					/* Restore original Post Data */
					wp_reset_postdata();
				} else {
					// no posts found
				} ?>

	    	</article>

<?php
get_sidebar();
get_footer();
?>
