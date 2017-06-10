<?php
/**
 * The front-page template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Slater
 */

?>

<?php get_header(); ?>
	
	<?php 
	
	//Hero Image 
	get_template_part( 'template-parts/frontpage', 'hero');

	?>
	


<?php
get_sidebar();
get_footer();
?>