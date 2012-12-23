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
	
	
	$wp_customize->remove_section( 'title_tagline' );
	
	$wp_customize->add_section( 'solofolio_header_Section' , array(
		'title'       => __( 'Header', 'solofolio' ),
		'priority'    => 30,
		'description' => 'Header settings',
	) );

		$wp_customize->add_setting( 'solofolio_phone' );
	
		$wp_customize->add_control( 'solofolio_phone', array(
			'label' => 'Phone Number',
			'settings' => 'solofolio_phone',
			'section' => 'solofolio_header_Section',
			'type' => 'text',
			'priority' => '30',
		) );
	
		$wp_customize->add_setting( 'solofolio_email' );
	
		$wp_customize->add_control( 'solofolio_email', array(
			'label' => 'Email Address',
			'settings' => 'solofolio_email',
			'section' => 'solofolio_header_Section',
			'type' => 'text',
			'priority' => '30',
		) );
	
	$wp_customize->add_section( 'solofolio_logo_section' , array(
		'title'       => __( 'Logo', 'solofolio' ),
		'priority'    => 50,
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
	
		$wp_customize->add_setting( 'solofolio_favicon' );
	
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'solofolio_favicon', array(
			'label'    => __( 'Favicon', 'solofolio' ),
			'section'  => 'solofolio_logo_section',
			'settings' => 'solofolio_favicon',
		) ) );
		
		$wp_customize->add_setting( 'solofolio_ios' );
	
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'solofolio_ios', array(
			'label'    => __( 'iOS icon', 'solofolio' ),
			'section'  => 'solofolio_logo_section',
			'settings' => 'solofolio_ios',
		) ) );
	
	$wp_customize->add_section( 'solofolio_footer_section' , array(
		'title'       => __( 'Footer', 'solofolio' ),
		'priority'    => 40,
		'description' => 'Change footer content',
	) );
	
		$wp_customize->add_setting( 'solofolio_footer_text' );
	
		$wp_customize->add_control( 'solofolio_footer_text', array(
			'label' => 'Footer Text',
			'settings' => 'solofolio_footer_text',
			'section' => 'solofolio_footer_section',
			'type' => 'text', // Default is "text"
			'choices' => '', // This is optional, depending on type's value.
			'priority' => '', // Default is 10.
		) );

	$wp_customize->add_section( 'solofolio_layout_section' , array(
		'title'       => __( 'Page Layout', 'solofolio' ),
		'priority'    => 70,
		'description' => 'Layout options',
	) );
		
		$wp_customize->add_setting( 'solofolio_header_width', array('default' => '280') );
		
		$wp_customize->add_control( 'solofolio_header_width', array(
			'label' => 'Sidebar width',
			'settings' => 'solofolio_header_width',
			'section' => 'solofolio_layout_section',
			'priority' => '', // Default is 10.
		) );

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

/* Design Notes - What actually needs to be customized? 

Body
-Font size
-Font color


Wrapper
-Background

Sidebar
-Background

Navigation
-Size
-Color - normal
-Color - hover/active

Blog
-Title Color
-Title Color Hover
-Date/author Color


Titles
-Color
-Size

Footer
-Size
-Color
-Footer links inherit footer font/color



*/


}


?>