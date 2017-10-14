<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Slater
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<section class="container--100 center-block">
	  <div class="comments__outer-container">
	    <div id="comments-toggle" class="comments__title-container">

			<?php if ( have_comments() ) { 
				//Get the number of comments 
				$comment_count = get_comments_number();
			?>	    			
	    	
	    	<h2 class="comments__title">Comments &middot; <span class="comments__title-count"><?php echo $comment_count; ?></span></h2>

	    </div>
	    <div class="comments__inner-container">
	      <?php //Comment Form ?>
	      <h2>Join the Discussion.</h2>

	      <ul class="comment-list">
		      <?php
		        wp_list_comments( array(
		          'style'      => 'li',
		          'short_ping' => true,
		        ) );
		      ?>
		    </ul><!-- .comment-list -->

	    	<?php $comments_args = array(
  
				        // change the title of send button 
				        'label_submit'=>'Submit',
				        // change the title of the reply section
				        'title_reply'=>'',
				        // remove "Text or HTML to be displayed after the set of comment fields"
				        'comment_notes_after' => '',
				        // redefine your own textarea (the comment body)
				        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
				);

				comment_form($comments_args);	?>

				</div>

	    <?php } else { ?>
				
				<h2 class="comments__title">Comments &middot; <span class="comments__title-count"><small>Be the first to comment!</small></span></h2>
	    </div>
	    <div id="comments__inner-container" class="comments__inner-container">
	      <?php //Comment Form ?>

	      <ol class="comment-list">
		      <?php
		        wp_list_comments( array(
		          'style'      => 'ol',
		          'short_ping' => true,
		        ) );
		      ?>
		    </ol><!-- .comment-list -->

	    	<?php $comments_args = array(
  
				        // change the title of send button 
				        'label_submit'=>'Submit',
				        // change the title of the reply section
				        'title_reply'=>'',
				        // remove "Text or HTML to be displayed after the set of comment fields"
				        'comment_notes_after' => '',
				        // redefine your own textarea (the comment body)
				        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'slater' ) . '</label><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
				);

				comment_form($comments_args);	?>

				</div>

	    <?php } ?>

	</div>
</section>


