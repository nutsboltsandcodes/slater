<section class="container center-block">
  <div id="comments__outer-container" class="comments__outer-container">
    <div class="comments__title-container">
      <h2 class="comments__title">Comments &middot; <span class="comments__title-count">17</span></h2>
      <span id="comments__title-toggle" class="comments__title-toggle"></span>
    </div>
    <div id="comments__inner-container" class="comments__inner-container">
      <?php //Comment Form ?>
      <h2>Join the Discussion.</h2>
      <p class="muted no-margin">Your infomation will never be published or sold.</p>
      <p class="muted no-margin">All comments must be approved before they will be displayed.</p>
      <form>
        <label>Email Address</label>
        <input type="email" name="email">
        <label>Name</label>
        <input type="text" name="name">
        <label>Comment</label>
        <textarea></textarea>
        <input type="submit" name="submit" value="Submit!">
      </form> <?php //End of Comment Form ?>

    </div>
  </div>
</section>



<div id="comments" class="comments__area">

  <?php
  // You can start editing here -- including this comment!
  if ( have_comments() ) : ?>
    <h3 class="comments__title">
      <?php
        $comment_count = get_comments_number();
        if ( 1 === $comment_count ) {
          printf(
            /* translators: 1: title. */
            esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'slater' ),
            '<span>' . get_the_title() . '</span>'
          );
        } else {
          printf( // WPCS: XSS OK.
            /* translators: 1: comment count number, 2: title. */
            esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'slater' ) ),
            number_format_i18n( $comment_count ),
            '<span>' . get_the_title() . '</span>'
          );
        }
      ?>
    </h3><!-- .comments-title -->

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
    <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
      <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'slater' ); ?></h2>
      <div class="nav-links">

        <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'slater' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'slater' ) ); ?></div>

      </div><!-- .nav-links -->
    </nav><!-- #comment-nav-above -->
    <?php endif; // Check for comment navigation. ?>

    <ol class="comment-list">
      <?php
        wp_list_comments( array(
          'style'      => 'ol',
          'short_ping' => true,
        ) );
      ?>
    </ol><!-- .comment-list -->

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
    <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
      <h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'slater' ); ?></h2>
      <div class="nav-links">

        <div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'slater' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'slater' ) ); ?></div>

      </div><!-- .nav-links -->
    </nav><!-- #comment-nav-below -->
    <?php
    endif; // Check for comment navigation.

  endif; // Check for have_comments().


  // If comments are closed and there are comments, let's leave a little note, shall we?
  if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'slater' ); ?></p>
  <?php
  endif;

  comment_form();
  ?>

</div><!-- #comments -->
