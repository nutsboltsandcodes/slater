<?php
/**
 * Slater functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Slater
 */

/**
* Slater Setup | sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which
* runs before the init hook. The init hook is too late for some features, such
* as indicating support for post thumbnails.
*/

require get_template_directory() . '/inc/setup/setup-slater-setup.php';
require get_template_directory() . '/inc/setup/setup-navmenus.php';

/**
* Slater Styles and Scripts | enqueues custom stylesheets and scripts
*
* @link https://developer.wordpress.org/themes/basics/including-css-javascript/
*/

require get_template_directory() . '/inc/assets/styles-scripts.php';

/**
* Slater Customizer | custom WordPress Customizer Files 
*
* @link https://developer.wordpress.org/themes/customize-api/ 
*/

require get_template_directory() . '/inc/customizer/customizer.php';
require get_template_directory() . '/inc/customizer/customizer-homepage-settings.php';
require get_template_directory() . '/inc/customizer/customizer-footer-settings.php';

/**
* Slater Customizations | various theme and admin customizations
*/

require get_template_directory() . '/inc/customizations/customizations-excerpt.php';
require get_template_directory() . '/inc/customizations/customizaations-page-cat-sub-index.php';

/**
* Slater Customizations | Merlin Onboarding Wizard
*/

// require get_template_directory() .  '/inc/merlin/merlin.php';
// require get_template_directory() .  '/inc/merlin-config.php';

?>