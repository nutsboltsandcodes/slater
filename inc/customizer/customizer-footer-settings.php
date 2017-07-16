<?php 
/*
* Add a footer settings section to the WordPress customizer
*/

function slater_footer_settings($wp_customize) {

	//Add "Footer Settings" section to WP customizer
	$wp_customize->add_section('slater_footer_settings', array(
		'title' => 'Footer Settings'
	));

	//Add a text area input for the footer blurb, provide default text
	$wp_customize->add_setting('slater_footer_blurb_setting', array(
		'default' => 'I am a footer blurb. Change me in the WordPress customizer.', 
		'sanitize_callback' => 'sanitize_text_field'
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
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));

	//Add a control for the setting 
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'slater_form_control', array(
		'label' => 'Your Mailchimp Form Action URL', 
		'section' => 'slater_footer_settings', 
		'settings' => 'slater_form_setting'
	)));

}

add_action('customize_register','slater_footer_settings');

?>