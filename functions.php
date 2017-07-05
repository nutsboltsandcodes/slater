<?php
/**
 * Slater functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Slater
 */

if ( ! function_exists( 'slater_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function slater_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Slater, use a find and replace
	 * to change 'slater' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'slater', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'header-menu' => esc_html__( 'Header', 'slater'),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'slater_custom_background_args', array(
		'default-color' => 'e5e7e9',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'slater_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function slater_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'slater_content_width', 640 );
}
add_action( 'after_setup_theme', 'slater_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function slater_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'slater' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'slater' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'slater_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function slater_scripts() {

	//Style.css
	wp_enqueue_style( 'slater-style', get_stylesheet_uri() );

	wp_enqueue_script( 'slater-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'slater-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	//Main.css -> minified version
	wp_enqueue_style( 'main' , get_template_directory_uri() . '/dist/css/minified/main.css' );

	//Main.js -> minified version
	wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/js/main.js' );

	//Prism.js -> minified version
	wp_enqueue_script( 'prism', get_template_directory_uri() . '/dist/js/prism.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'slater_scripts' );

/**
 * Enqueue Google Fonts
 */
 
function google_fonts() {
				wp_register_style( 'Roboto', '//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i' );
				wp_enqueue_style( 'Roboto' );
		}
add_action( 'wp_print_styles', 'google_fonts' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function slater_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'slater_pingback_header' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Modify Admin Footer Text
 */
 
function modify_footer() {
	echo 'Created with love by <a href="mailto:wyatt.castaneda@gmail.com">Wyatt</a> :).';
}
add_filter( 'admin_footer_text', 'modify_footer' );

/**
 * Add Lead Class to First Paragraph
 */

function first_paragraph( $content ) {
	return preg_replace( '/<p([^>]+)?>/', '<p$1 class="lead">', $content, 1 );
}
add_filter( 'the_content', 'first_paragraph' );

/*
* Add a home page settings section to the WordPress customizer
*/

function slater_home_page_settings($wp_customize) {

	//Add section to WP customizer
	$wp_customize->add_section('slater_home_page_section', array(
		'title' => 'Home Page Settings'
	));

	//Add a option to turn of the Monthly Focus Section
	$wp_customize->add_setting('slater_monthly_focus_display', array(
		'default' => 'Yes'
	));

	//Add a control for the setting 
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'slater_monthly_focus_display_control', array(
		'label' => 'Display the Monthly Focus Feature?', 
		'section' => 'slater_home_page_section', 
		'settings' => 'slater_monthly_focus_display',
		'type' => 'select', 
		'choices' => array('No' => 'No', 'Yes' => 'Yes')
	)));

	//Add the Headline setting to the database and provide a default value
	$wp_customize->add_setting('slater_monthly_focus_headline', array(
		'default' => 'Monthly Focus!'
	));

	//Add a control for the setting 
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'slater_monthly_focus_headline_control', array(
		'label' => 'Headline', 
		'section' => 'slater_home_page_section', 
		'settings' => 'slater_monthly_focus_headline'
	)));

	//Add the Headline setting to the database and provide a default value
	$wp_customize->add_setting('slater_monthly_focus_text', array(
		'default' => 'My Example Focus!'
	));

	//Add a control for the setting 
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'slater_monthly_focus_text_control', array(
		'label' => 'What is your Monthly Focus?', 
		'section' => 'slater_home_page_section', 
		'settings' => 'slater_monthly_focus_text'
	)));

	//Add the ability to point the link to an existing page
	$wp_customize->add_setting('slater_monthly_focus_link');

	//Add a control for the setting 
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'slater_monthly_focus_link_control', array(
		'label' => 'Link', 
		'section' => 'slater_home_page_section', 
		'settings' => 'slater_monthly_focus_link', 
		'type' => 'dropdown-pages'
	)));

}

add_action('customize_register','slater_home_page_settings');

/*
* Add a footer settings section to the WordPress customizer
*/

function slater_footer_settings($wp_customize) {

	//Add section to WP customizer
	$wp_customize->add_section('slater_footer_settings', array(
		'title' => 'Footer Settings'
	));

	//Add a text area input for the footer blurb
	$wp_customize->add_setting('slater_footer_blurb_setting', array(
		'default' => 'Change me in the WordPress customizer. Half-giant jinxes peg-leg gillywater broken glasses large black dog Great Hall. Nearly-Headless Nick now string them together, and answer me this, which creature would you be unwilling to kiss? Poltergeist sticking charm, troll umbrella stand flying cars golden locket Lily Potter. Yer a wizard, Harry Doxycide the woes of Mrs. Weasley Goblet of Fire.'
	));

	//Add a control for the footer blurb setting 
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'slater_footer_blurb_control', array(
		'label' => 'Footer Blurb', 
		'section' => 'slater_footer_settings', 
		'settings' => 'slater_footer_blurb_setting',
		'type' => 'textarea'
	)));

	//Add a option to turn of the footer signup form
	$wp_customize->add_setting('slater_mailchimp_form_display', array(
		'default' => 'Yes'
	));

	//Add a control for the display setting 
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'slater_mailchimp_form_display_control', array(
		'label' => 'Display the Sign Up Form?', 
		'section' => 'slater_footer_settings', 
		'settings' => 'slater_mailchimp_form_display',
		'type' => 'select', 
		'choices' => array('No' => 'No', 'Yes' => 'Yes')
	)));

	//Add the url setting to the database and provide a default value
	$wp_customize->add_setting('slater_form_setting', array(
		'default' => ''
	));

	//Add a control for the setting 
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'slater_form_control', array(
		'label' => 'Your Mailchimp Form Action URL', 
		'section' => 'slater_footer_settings', 
		'settings' => 'slater_form_setting'
	)));

}

add_action('customize_register','slater_footer_settings');