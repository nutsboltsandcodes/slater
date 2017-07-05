<?php 
/**
 * The template partial for displaying the footer email sign up form
 *
 * @package Slater
 */
 ?>
 
<div class="width-75">
  <form action="<?php echo get_theme_mod('slater_form_setting'); ?>" method="post" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
      <div class="mc-field-group">
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="youremail@mail.com" >
      </div>
      <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
      </div>
      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true">
        <input type="text" name="b_e36a7e9abd1a8325f08587bb0_dfd0b8481f" tabindex="-1" value="">
      </div>
      <div class="clear">
        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn center-block">
      </div>
    </div>
  </form>
</div>