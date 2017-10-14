<?php
/**
 * Merlin WP configuration file.
 *
 * @package @@pkg.name
 * @version @@pkg.version
 * @author  @@pkg.author
 * @license @@pkg.license
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

/**
 * Set directory locations, text strings, and other settings for Merlin WP.
 */
$wizard = new Merlin(
	// Configure Merlin with custom settings.
	$config = array(
		'directory'			=> 'inc',						// Location where the 'merlin' directory is placed.
		'demo_directory'		=> 'demo/',					// Location where the theme demo files exist.
		'merlin_url'			=> 'merlin',					// Customize the page URL where Merlin WP loads.
		'child_action_btn_url'		=> 'https://codex.wordpress.org/Child_Themes',  // The URL for the 'child-action-link'.
		'help_mode'			=> false,					// Set to true to turn on the little wizard helper.
		'dev_mode'			=> true,					// Set to true if you're testing or developing.
		'branding'			=> false,					// Set to false to remove Merlin WP's branding.
	),
	// Text strings.
	$strings = array(
		'admin-menu' 			=> esc_html__( 'Theme Setup' , 'slater' ),
		'title%s%s%s%s' 		=> esc_html__( '%s%s Themes &lsaquo; Theme Setup: %s%s' , 'slater' ),

		'return-to-dashboard' 		=> esc_html__( 'Return to the dashboard' , 'slater' ),

		'btn-skip' 			=> esc_html__( 'Skip' , 'slater' ),
		'btn-next' 			=> esc_html__( 'Next' , 'slater' ),
		'btn-start' 			=> esc_html__( 'Start' , 'slater' ),
		'btn-no' 			=> esc_html__( 'Cancel' , 'slater' ),
		'btn-plugins-install' 		=> esc_html__( 'Install' , 'slater' ),
		'btn-child-install' 		=> esc_html__( 'Install' , 'slater' ),
		'btn-content-install' 		=> esc_html__( 'Install' , 'slater' ),
		'btn-import' 			=> esc_html__( 'Import' , 'slater' ),

		'welcome-header%s' 		=> esc_html__( 'Welcome to %s' , 'slater' ),
		'welcome-header-success%s' 	=> esc_html__( 'Hi. Welcome back' , 'slater' ),
		'welcome%s' 			=> esc_html__( 'This wizard will set up your theme, install plugins, and import content. It is optional & should take only a few minutes.' , 'slater' ),
		'welcome-success%s' 		=> esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.' , 'slater' ),

		'child-header' 			=> esc_html__( 'Install Child Theme' , 'slater' ),
		'child-header-success' 		=> esc_html__( 'You\'re good to go!' , 'slater' ),
		'child' 			=> esc_html__( 'Let\'s build & activate a child theme so you may easily make theme changes.' , 'slater' ),
		'child-success%s' 		=> esc_html__( 'Your child theme has already been installed and is now activated, if it wasn\'t already.' , 'slater' ),
		'child-action-link' 		=> esc_html__( 'Learn about child themes' , 'slater' ),
		'child-json-success%s' 		=> esc_html__( 'Awesome. Your child theme has already been installed and is now activated.' , 'slater' ),
		'child-json-already%s' 		=> esc_html__( 'Awesome. Your child theme has been created and is now activated.' , 'slater' ),

		'plugins-header' 		=> esc_html__( 'Install Plugins' , 'slater' ),
		'plugins-header-success' 	=> esc_html__( 'You\'re up to speed!' , 'slater' ),
		'plugins' 			=> esc_html__( 'Let\'s install some essential WordPress plugins to get your site up to speed.' , 'slater' ),
		'plugins-success%s' 		=> esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.' , 'slater' ),
		'plugins-action-link' 		=> esc_html__( 'Advanced' , 'slater' ),

		'import-header' 		=> esc_html__( 'Import Content' , 'slater' ),
		'import' 			=> esc_html__( 'Let\'s import content to your website, to help you get familiar with the theme.' , 'slater' ),
		'import-action-link' 		=> esc_html__( 'Advanced' , 'slater' ),

		'ready-header' 			=> esc_html__( 'All done. Have fun!' , 'slater' ),
		'ready%s' 			=> esc_html__( 'Your theme has been all set up. Enjoy your new theme by %s.' , 'slater' ),
		'ready-action-link' 		=> esc_html__( 'Extras' , 'slater' ),
		'ready-big-button' 		=> esc_html__( 'View your website' , 'slater' ),

		'ready-link-1'            	=> wp_kses( sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://wordpress.org/support/', esc_html__( 'Explore WordPress', 'slater' ) ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ),
		'ready-link-2'            	=> wp_kses( sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://themebeans.com/contact/', esc_html__( 'Get Theme Support', 'slater' ) ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ),
		'ready-link-3'           	=> wp_kses( sprintf( '<a href="'.admin_url( 'customize.php' ).'" target="_blank">%s</a>', esc_html__( 'Start Customizing', 'slater' ) ), array( 'a' => array( 'href' => array(), 'target' => array() ) ) ),
	)
);
