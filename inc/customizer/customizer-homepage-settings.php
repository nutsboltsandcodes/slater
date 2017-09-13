<?php 

/*
* Add a home page settings section to the WordPress customizer
*/

function slater_home_page_settings($wp_customize) {

	/*
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
		'default' => 'Monthly Focus!',
		'sanitize_callback' => 'sanitize_text_field'
	));

	//Add a control for the setting 
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'slater_monthly_focus_headline_control', array(
		'label' => 'Headline', 
		'section' => 'slater_home_page_section', 
		'settings' => 'slater_monthly_focus_headline'
	)));

	//Add the Headline setting to the database and provide a default value
	$wp_customize->add_setting('slater_monthly_focus_text', array(
		'default' => 'My Example Focus!', 
		'sanitize_callback' => 'sanitize_text_field'
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

	//Add the ability to point the link to an existing page
	$wp_customize->add_setting('slater_theme_logo_setting');

	//Add a control for the setting 
	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'slater_theme_logo_control', array(
		'label' => 'Logo', 
		'section' => 'slater_home_page_section', 
		'settings' => 'slater_theme_logo_setting', 
	)));
	*/

}

add_action('customize_register','slater_home_page_settings');

?>