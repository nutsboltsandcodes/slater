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

    <div class="container center-block">
      <div class="footer__social-container">
        <a href="https://github.com/WyattCast44" target="_blank"><img alt="Github" class="footer__social" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/github.svg" ></a>
        <a href="https://twitter.com/WyattCastaned44" target="_blank"><img alt="Twitter" class="footer__social" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/twitter.svg"></a>
        <a href="https://drive.google.com/drive/folders/0B5pmzJZZXrXxRW5Dam9rZk5tWFU?usp=sharing" target="_blank"><img alt="Google Drive" class="footer__social" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/google.svg"></a>
      </div>
    </div>

  </footer>

  <a href="#" class="top-scroll"><i data-feather="arrow-up"></i></a>

  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

<?php wp_footer(); ?>

</body>
</html>
