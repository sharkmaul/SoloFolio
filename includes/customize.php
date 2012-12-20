<?php

/* 
SoloFolio
Admin - WP Customize Stuff

After years of battling with a custom theme settings backend, the WordPress folks have listened. This makes me so happy.

*/

function solofolio_customize_register( $wp_customize )
{
	$wp_customize->add_setting( 'solofolio_phone' );
	
	$wp_customize->add_control( 'solofolio_phone', array(
		'label' => 'Phone Number',
		'settings' => 'solofolio_phone',
		'section' => 'title_tagline',
		'type' => 'text',
		'priority' => '30'
	) );
	
	$wp_customize->add_setting( 'solofolio_email' );
	
	$wp_customize->add_control( 'solofolio_email', array(
		'label' => 'Email Address',
		'settings' => 'solofolio_email',
		'section' => 'title_tagline',
		'type' => 'text',
		'priority' => '30'
	) );
	
	
	$wp_customize->add_section( 'solofolio_logo_section' , array(
		'title'       => __( 'Logo', 'solofolio' ),
		'priority'    => 30,
		'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	
		$wp_customize->add_setting( 'solofolio_logo' );
	
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'solofolio_logo', array(
			'label'    => __( 'Logo', 'solofolio' ),
			'section'  => 'solofolio_logo_section',
			'settings' => 'solofolio_logo',
		) ) );
	
		$wp_customize->add_setting( 'solofolio_logo_retina' );
	
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'solofolio_logo_retina', array(
			'label'    => __( 'Retina Logo (2x)', 'solofolio' ),
			'section'  => 'solofolio_logo_section',
			'settings' => 'solofolio_logo_retina',
		) ) );
	
	$wp_customize->add_section( 'solofolio_footer_section' , array(
		'title'       => __( 'Footer', 'solofolio' ),
		'priority'    => 50,
		'description' => 'Change footer content',
	) );
	
		$wp_customize->add_setting( 'solofolio_footer_text' );
	
		$wp_customize->add_control( 'solofolio_footer_text', array(
			'label' => 'Footer Text',
			'settings' => 'solofolio_footer_text',
			'section' => 'solofolio_footer_section',
			'type' => 'text', // Default is "text"
			'choices' => '', // This is optional, depending on type's value.
			'priority' => '' // Default is 10.
		) );

	$wp_customize->add_section( 'solofolio_tracking_css' , array(
		'title'       => __( 'Tracking & CSS', 'solofolio' ),
		'priority'    => 50,
		'description' => 'Tracking code and CSS settings',
	) );
	
		$wp_customize->add_setting( 'solofolio_tracking' );
	
		$wp_customize->add_control( 'solofolio_tracking', array(
			'label' => 'Tracking code',
			'settings' => 'solofolio_tracking',
			'section' => 'solofolio_tracking_css',
			'type' => 'text', // Default is "text"
			'choices' => '', // This is optional, depending on type's value.
			'priority' => '' // Default is 10.
		) );


}
add_action( 'customize_register', 'solofolio_customize_register' );

?>