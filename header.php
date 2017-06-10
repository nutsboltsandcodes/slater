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
<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'slater' ); ?></a> -->

	<header id="masthead" role="banner">

    <!-- navigation container - toggable -->
    <div class="top-nav__container">
      
      <!-- Logo -->
      <a href="#" class="top-nav__logo"><img alt="Logo" src="http://nutsboltsandcodes.com/wp-content/uploads/2017/06/logo.png"></a>
      <!-- Mobile Menu Toggle -->
      <span id="top-nav__toggle" class="top-nav__toggle"></span>

      <nav class="top-nav__nav" role="navigation">
        <!-- nav links -->
        <ul class="top-nav__ul">
          <li><a class="top-nav__a" href="#">Home</a></li>
          <li><a class="top-nav__a" href="#">Tutorials</a></li>
          <li><a class="top-nav__a" href="#">Portfolio</a></li>
          <li><a class="top-nav__a" href="#">Thoughts</a></li>
        </ul><!-- /nav links -->
      </nav>
      
    </div><!-- /navigation container - toggable -->

  </header>

  <main id="content" class="site-content">
