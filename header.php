<?php
/**
 * The header for our theme 
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Slater
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="icon" href="favicon.ico">
  <script>
  var templateDir = "<?php bloginfo('template_directory'); ?>"; </script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header id="siteHeader" role="banner">
    
      <div class="siteHeader__left">
        <a href="<?php bloginfo('url'); ?>" class="siteHeader__left-logo-link"><img alt="<?php bloginfo('title'); ?>" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png"></a><!-- #logo -->
        <i class="mobileMenuToggle" data-feather="menu"></i>
      </div><!-- #left --> 

      <div class="siteHeader__right">
        <div class="siteHeader__right--left">
          <?php 
            // Display the Navigation Menu: Primary
            wp_nav_menu(
              array(
                'menu' => 'header-menu',
                'theme_location' => 'header-menu', 
                'container' => 'nav', 
                'container_class' => 'top-nav__nav',
                'menu_class' => 'top-nav__ul', 
            )); ?>        
        </div><!-- left -->
        <div class="siteHeader__right--right">
          <i class="secondaryMenuToggle" data-feather="menu"></i><!-- #mobile menu toggle -->
        </div><!-- right -->
      </div><!-- #right -->

  </header>
    

    <aside class="secondary-menu">
      <nav class="secondary-menu--header">
        <i class="secondaryMenuToggle" data-feather="x"></i>
        <ul class="secondary-menu--header--nav">
          <li><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></li>
        </ul>
      </nav>
      <?php 
        // Display the Navigation Menu: Secondary
        wp_nav_menu(
          array(
            'menu'            => 'secondary-header-menu',
            'theme_location'  => 'secondary-header-menu',
            'menu_class'      => 'secondary-menu--nav',
            'container'       => 'div',
            'container_class' => 'secondary-menu--container',
            'container_id'    => 'secondaryMenu',
         )); 
      ?>
    </aside>

    <aside class="mobileMenu">
        <i class="mobileMenuClose" data-feather="x"></i>
        <?php 
        // Display the Navigation Menu: Secondary
        wp_nav_menu(
          array(
            'menu'            => 'mobile-menu',
            'theme_location'  => 'mobile-menu',
            'menu_class'      => 'mobile-menu--nav',
            'container'       => 'nav',
            'container_class' => 'mobile-menu',
            'container_id'    => '',
         )); 
      ?>
    </aside>

  

  <main id="content" class="site-content">
