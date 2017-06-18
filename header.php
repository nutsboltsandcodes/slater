<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Slater
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="icon" href="favicon.ico">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'slater' ); ?></a> -->

	<header id="masthead" role="banner">

    <!-- navigation container - toggable -->
    <div class="top-nav top-nav__container">
      
      <!-- Logo -->
      <a href="<?php bloginfo('url'); ?>" class="top-nav__logo"><img alt="<?php bloginfo('title'); ?>" src="<?php echo get_template_directory_uri(); ?>/images/logo.PNG"></a>
      <!-- Mobile Menu Toggle -->
      <span id="top-nav__toggle" class="top-nav__toggle"></span>

      <?php 
        wp_nav_menu(
          array(
            'menu' => 'header',
            'container' => 'nav', 
            'container_class' => 'top-nav__nav',
            'menu_class' => 'top-nav__ul', 
        ));
      ?>
      
    </div><!-- /navigation container - toggable -->

  </header>

  <main id="content" class="site-content">
