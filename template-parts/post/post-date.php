<?php
/**
 * Template partial for displaying the either the posted date or the updated dates
 *
 * @link https://codex.wordpress.org/Function_Reference/get_the_modified_times
 *
 * @package Slater
 */
?>

<?php 

//Display the post date as either "Posted on" or "Updated on" if post has been updated
if ( get_the_time() == get_the_modified_time() ) { ?>
	<small class="article__meta-date">Posted on: <?php the_modified_date('F j, Y'); ?></small>
<?php } else { ?>
	<small class="article__meta-date">Updated on: <?php the_modified_date('F j, Y'); ?></small>
<?php }

?>