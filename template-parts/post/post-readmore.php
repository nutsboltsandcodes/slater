<?php

// WP_Query arguments
$args = array(
	'posts_per_page'         => '2',
	'orderby'                => 'rand',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) { ?>
	<div class="row hide-small">
	
		<?php while ( $query->have_posts() ) {
			$query->the_post(); ?>
		
			<div class="col-6">
				
				<div class="read-more">
					
					<div class="read-more__title-container">
						<h2 class="read-more__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</div>

					<div class="read-more__meta">
						
						<?php 

						$comment_count = get_comments_number();

						if ( $comment_count == 0 ) {
							$comment_count = "";
						} elseif ( $comment_count == 1) {
							$comment_count = "| " . $comment_count . " comment";
						} else {
							$comment_count = "| " . $comment_count . " comments";
						} 

						if ( get_the_time() == get_the_modified_time() ) { ?>
							<small class="muted"><?php the_modified_date('F j, Y'); ?> <?php echo $comment_count; ?></small>
						<?php } else { ?>
							<small class="muted"><?php the_modified_date('F j, Y'); ?> <?php echo $comment_count; ?></small>
						<?php }

						?>

					</div>

					<div class="read-more__content">
						<?php the_excerpt(); ?>
					</div>

				</div>

			</div>

		<?php } ?>

	</div><!-- #row -->

<?php } else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();

?>