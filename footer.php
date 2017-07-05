<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Slater
 */

?>

	</main>

	 <footer class="footer">

    <div class="container center-block">
      <p class="footer__blurb"><?php echo get_theme_mod('slater_footer_blurb_setting'); ?></p>

        <?php if ( get_theme_mod('slater_mailchimp_form_display') == 'Yes' ) {
          get_template_part('template-parts/footer/footer', 'form');
        } ?>

    </div>

  </footer>

  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

<?php wp_footer(); ?>

</body>
</html>
