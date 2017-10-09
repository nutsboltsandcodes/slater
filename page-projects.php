<?php /* Template Name: Projects Template */ ?>
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
      		<div id="wpgen" class="article--project">
      			<div class="article--project-left">
      				<h1><a href="#!">WP-GEN</a></h1>
      				<p>A web app to quickly and easily generate custom WordPress snippets for developing WordPress themes and Plugins!</p>
      			</div>
      			<div class="article--project-right">
      				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sidebar-gen.png">
      			</div>
      		</div>

      		<div id="wpgen" class="article--project">
      			<div class="article--project-left">
      				<h1><a href="#!">Microblogger</a></h1>
      				<p>A website coming soon, featuring my custom WordPress theme, microblogger!</p>
      			</div>
      			<div class="article--project-right">
      				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/microblogger.png">
      			</div>
      		</div>

      	</article>

    	</div>
		
		<?php endwhile; // End of the loop.?>

<?php get_footer(); ?>