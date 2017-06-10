<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Slater
 */

?>

<?php get_header(); ?>
	
	<?php //Hero Image ?>
	<div class="hero">
    <div class="hero__image-container">
      <?php // Check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
			    the_post_thumbnail();
			} ?>
    </div>
  </div>


<?php
get_sidebar();
get_footer();
?>
