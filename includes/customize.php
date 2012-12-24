<?php

/* 
SoloFolio
Admin - WP Customize Stuff

After years of battling with a custom theme settings backend, the WordPress folks have listened. This makes me so happy.

*/

add_action( 'customize_register', 'solofolio_customize_register' );
function solofolio_customize_register( $wp_customize )
{
	
	class Customizer_Textarea_Control extends WP_Customize_Control {
		public $type = 'textarea';

		public function render_content() {
		?>
			<label>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
			</label>
		<?php
		}
	}
	
	// Remove default menus
	$wp_customize->remove_section( 'title_tagline' );
	
	$wp_customize->remove_section( 'static_front_page' );
	
	
	// Sidebar
	$wp_customize->add_section( 'solofolio_header_section' , array(
		'title'       => __( 'Sidebar', 'solofolio' ),
		'priority'    => 20,
		'description' => 'Header settings',
	) );

		$wp_customize->add_setting( 'solofolio_phone', array(
			'transport'   => 'postMessage',
        ));
	
		$wp_customize->add_control( 'solofolio_phone', array(
			'label' => 'Phone Number',
			'settings' => 'solofolio_phone',
			'section' => 'solofolio_header_section',
			'type' => 'text',
			'priority' => '30',
		) );
	
		$wp_customize->add_setting( 'solofolio_email', array(
			'transport'   => 'postMessage',
        ));
	
		$wp_customize->add_control( 'solofolio_email', array(
			'label' => 'Email Address',
			'settings' => 'solofolio_email',
			'section' => 'solofolio_header_section',
			'type' => 'text',
			'priority' => '30',
		) );
		
		$wp_customize->add_setting( 'solofolio_header_width', array('default' => '280') );
		
		$wp_customize->add_control( 'solofolio_header_width', array(
			'label' => 'Width',
			'settings' => 'solofolio_header_width',
			'section' => 'solofolio_header_section',
			'priority' => '30', // Default is 10.
		) );
		
		$wp_customize->add_setting( 'solofolio_footer_text', array(
			'transport'   => 'postMessage',
        ));
	
		$wp_customize->add_control( 'solofolio_footer_text', array(
			'label' => 'Credit Text',
			'settings' => 'solofolio_footer_text',
			'section' => 'solofolio_header_section',
			'type' => 'text', // Default is "text"
			'choices' => '', // This is optional, depending on type's value.
			'priority' => '30', // Default is 10.
		) );
		
		$wp_customize->add_setting( 'solofolio_logo_retina' );
	
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'solofolio_logo_retina', array(
			'label'    => __( 'Retina Logo (2x)', 'solofolio' ),
			'section'  => 'solofolio_header_section',
			'settings' => 'solofolio_logo_retina',
		) ) );
		
		$wp_customize->add_setting( 'solofolio_logo' );
	
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'solofolio_logo', array(
			'label'    => __( 'Logo', 'solofolio' ),
			'section'  => 'solofolio_header_section',
			'settings' => 'solofolio_logo',
		) ) );
		
	// Design
	
	$wp_customize->add_section( 'solofolio_design_section' , array(
		'title'       => __( 'Page Design', 'solofolio' ),
		'priority'    => 5,
		'description' => 'Design settings',
	) );
	
		$wp_customize->add_setting('solofolio_background_color', array(
			'default'           => '282828',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'   => 'postMessage',
        ));
 
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'solofolio_background_color', array(
			'label'    => __('Background Color', 'solofolio'),
			'section'  => 'solofolio_design_section',
			'settings' => 'solofolio_background_color',
		)));
		
		$wp_customize->add_setting( 'solofolio_body_font_size', array(
			'default' => '12px',
			'transport'   => 'postMessage',
        ));
	
		$wp_customize->add_control( 'solofolio_body_font_size', array(
			'label' => 'Font Size',
			'settings' => 'solofolio_body_font_size',
			'section' => 'solofolio_design_section',
			'type' => 'text',
		) );
		
		$wp_customize->add_setting('solofolio_body_font_color', array(
			'default'           => 'AAAAAA',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'   => 'postMessage',
        ));
 
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'solofolio_body_font_color', array(
			'label'    => __('Font Color', 'solofolio'),
			'section'  => 'solofolio_design_section',
			'settings' => 'solofolio_body_font_color',
		)));
	
		$wp_customize->add_setting('solofolio_body_link_color', array(
			'default'           => '7a7a7a',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'   => 'postMessage',
        ));
 
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'solofolio_body_link_color', array(
			'label'    => __('Link Color', 'solofolio'),
			'section'  => 'solofolio_design_section',
			'settings' => 'solofolio_body_link_color',
		)));
		
		$wp_customize->add_setting('solofolio_body_link_color_hover', array(
			'default'           => 'FFFFFF',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'   => 'postMessage',
        ));
 
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'solofolio_body_link_color_hover', array(
			'label'    => __('Link Color (Hover)', 'solofolio'),
			'section'  => 'solofolio_design_section',
			'settings' => 'solofolio_body_link_color_hover',
		)));
	
	// Navigation
	
	$wp_customize->add_section( 'solofolio_navigation_section' , array(
		'title'       => __( 'Navigation', 'solofolio' ),
		'priority'    => 10,
		'description' => 'Navigation settings',
	) );
	
		$wp_customize->add_setting( 'solofolio_navigation_font_size', array(
			'default' => '12px',
			'transport'   => 'postMessage',
        ));
	
		$wp_customize->add_control( 'solofolio_navigation_font_size', array(
			'label' => 'Font Size',
			'settings' => 'solofolio_navigation_font_size',
			'section' => 'solofolio_navigation_section',
			'type' => 'text',
		) );
		
		$wp_customize->add_setting('solofolio_navigation_link_color', array(
			'default'           => '7a7a7a',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'   => 'postMessage',
        ));
 
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'solofolio_navigation_link_color', array(
			'label'    => __('Navigation Link Color', 'solofolio'),
			'section'  => 'solofolio_navigation_section',
			'settings' => 'solofolio_navigation_link_color',
		)));
		
		$wp_customize->add_setting('solofolio_navigation_link_color_hover', array(
			'default'           => 'FFFFFF',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'   => 'postMessage',
        ));
 
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'solofolio_navigation_link_color_hover', array(
			'label'    => __('Navigation Link Color (Hover)', 'solofolio'),
			'section'  => 'solofolio_navigation_section',
			'settings' => 'solofolio_navigation_link_color_hover',
		)));
		
		$wp_customize->add_setting( 'solofolio_navigation_header_font_size', array(
			'default' => '14px',
			'transport'   => 'postMessage',
        ));
	
		$wp_customize->add_control( 'solofolio_navigation_header_font_size', array(
			'label' => 'Section Title Font Size',
			'settings' => 'solofolio_navigation_header_font_size',
			'section' => 'solofolio_navigation_section',
			'type' => 'text',
		) );
		
		$wp_customize->add_setting('solofolio_navigation_header_color', array(
			'default'           => 'FFFFFF',
			'sanitize_callback' => 'sanitize_hex_color',
			'transport'   => 'postMessage',
        ));
 
		$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'solofolio_navigation_header_color', array(
			'label'    => __('Section Header Color', 'solofolio'),
			'section'  => 'solofolio_navigation_section',
			'settings' => 'solofolio_navigation_header_color',
		)));
		
	// Tracking & CSS	
	$wp_customize->add_section( 'solofolio_tracking_css' , array(
		'title'       => __( 'Tracking & CSS', 'solofolio' ),
		'priority'    => 80,
		'description' => 'Tracking code and CSS settings',
	) );
	
		$wp_customize->add_setting( 'solofolio_tracking' );

		$wp_customize->add_control( new Customizer_Textarea_Control( $wp_customize, 'solofolio_tracking', array(
			'label' => 'Tracking code',
			'settings' => 'solofolio_tracking',
			'section' => 'solofolio_tracking_css',
			'priority' => '', // Default is 10.
		) ) );
		
		$wp_customize->add_setting( 'solofolio_css' );

		$wp_customize->add_control( new Customizer_Textarea_Control( $wp_customize, 'solofolio_css', array(
			'label' => 'Custom CSS',
			'settings' => 'solofolio_css',
			'section' => 'solofolio_tracking_css',
			'priority' => '', // Default is 10.
		) ) );
	
	// Blog	
	$wp_customize->add_section( 'solofolio_blog_section' , array(
		'title'       => __( 'Blog', 'solofolio' ),
		'priority'    => 90,
		'description' => 'Blog display settings',
	) );
	
		$wp_customize->add_setting( 'solofolio_blog_showauthor' );

		$wp_customize->add_control( 'solofolio_blog_showauthor', array(
			'settings' => 'solofolio_blog_showauthor',
			'label'    => __('Show author'),
			'section'  => 'solofolio_blog_section',
			'type'     => 'checkbox',
		));
	
		$wp_customize->add_setting( 'solofolio_blog_showcat' );

		$wp_customize->add_control( 'solofolio_blog_showcat', array(
			'settings' => 'solofolio_blog_showcat',
			'label'    => __('Show category'),
			'section'  => 'solofolio_blog_section',
			'type'     => 'checkbox',
		));
	
	// Gallery	
	$wp_customize->add_section( 'solofolio_gallery_section' , array(
		'title'       => __( 'Gallery', 'solofolio' ),
		'priority'    => 100,
		'description' => 'Gallery options',
	) );
	
		$wp_customize->add_setting('solofolio_gallery_default', array('default' => 'slideshow'));
 
		$wp_customize->add_control('solofolio_gallery_default', array(
			'label'      => __('Default gallery format'),
			'section'    => 'solofolio_gallery_section',
			'settings'   => 'solofolio_gallery_default',
			'type'       => 'select',
			'priority' => '10', // Default is 10.
			'choices'    => array(
				'slideshow' => 'Slideshow',
				'side-scroll' => 'Side scroll',
			),
		));
		
		$wp_customize->add_setting('solofolio_gallery_icon_color', array('default' => 'light'));
 
		$wp_customize->add_control('solofolio_gallery_icon_color', array(
			'label'      => __('Slideshow control icon color'),
			'section'    => 'solofolio_gallery_section',
			'settings'   => 'solofolio_gallery_icon_color',
			'type'       => 'select',
			'priority' => '10', // Default is 10.
			'choices'    => array(
				'light' => 'Light',
				'dark' => 'Dark',
			),
		));
		
		$wp_customize->add_setting('solofolio_gallery_cursor_color', array('default' => 'dark'));
 
		$wp_customize->add_control('solofolio_gallery_cursor_color', array(
			'label'      => __('Slideshow control cursor color'),
			'section'    => 'solofolio_gallery_section',
			'settings'   => 'solofolio_gallery_cursor_color',
			'type'       => 'select',
			'priority' => '10', // Default is 10.
			'choices'    => array(
				'dark' => 'Dark',
				'light' => 'Light',
			),
		));

		$wp_customize->add_setting( 'solofolio_gallery_sidescroll_padding', array('default' => '20') );
		
		$wp_customize->add_control( 'solofolio_gallery_sidescroll_padding', array(
			'label' => 'Side scroll gallery padding',
			'settings' => 'solofolio_gallery_sidescroll_padding',
			'section' => 'solofolio_gallery_section',
			'priority' => '20', // Default is 10.
		) );

	 $wp_customize->add_control('blogdescription')->theme_supports=false;

}

/**
 * Used by hook: 'customize_preview_init'
 * 
 * @see add_action('customize_preview_init',$func)
 */
function solofolio_customizer_live_preview()
{
	wp_enqueue_script( 
		  'mytheme-themecustomizer',			//Give the script an ID
		  get_template_directory_uri().'/js/theme-customizer.js',//Point to file
		  array( 'jquery','customize-preview' ),	//Define dependencies
		  '',						//Define a version (optional) 
		  true						//Put script in footer?
	);
}
add_action( 'customize_preview_init', 'solofolio_customizer_live_preview' );


?>