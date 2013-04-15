<?php
if(function_exists('register_sidebar')){

	register_sidebar(array('name' => 'Sidebar Layout - Main Navigation',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array('name' => 'Sidebar Layout - Under Nav on Blog',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}

// Load default theme options



/* Disable Admin Bar from frontend - More trouble than it's worth */
function hide_admin_bar_from_front_end(){
  if (is_blog_admin()) {
    return true;
  }
  return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );

// Force WP to make high-quality images
function solo_jpg_quality_callback($arg)
{
return (int)90;
}



add_filter('jpeg_quality', 'solo_jpg_quality_callback');

// Additional image size for huge res
function solofolio_set_image_sizes() {
	add_image_size('xlarge',1800,1200, false);
	update_option('thumbnail_size_w', 150);
	update_option('thumbnail_size_h', 100);
	update_option('medium_size_w', 300);
	update_option('medium_size_h', 200);
	update_option('large_size_w', 900);
	update_option('large_size_h', 600);
}
add_action( 'after_setup_theme', 'solofolio_set_image_sizes' );



// Remove image margins automatically added by WordPress. 
// From: http://wordpress.org/support/topic/10px-added-to-width-in-image-captions
class fixImageMargins{
    public function __construct(){
        add_filter('img_caption_shortcode', array(&$this, 'fixme'), 10, 3);
    }
    public function fixme($x=null, $attr, $content){
        extract(shortcode_atts(array(
                'id'    => '',
                'align'    => 'alignnone',
                'width'    => '',
                'caption' => ''
            ), $attr));
        if ( 1 > (int) $width || empty($caption) ) {return $content;}
        if ( $id ) $id = 'id="' . $id . '" ';
    return '<div ' . $id . 'class="wp-caption ' . $align . '">' . $content . '<p class="wp-caption-text">' . $caption . '</p></div>';
    }
}
$fixImageMargins = new fixImageMargins();

// Filter image output in editor for blog posts
// From http://wordpress.stackexchange.com/questions/78285/alter-image-output-in-content
// Currently deprecated out of fear.
/*function solofolio_filter_images($html, $id) {

    //fetching attachment by post $id
    $attachment = get_post($id); 
    $mime_type = $attachment->post_mime_type;

    //get an valid array of images types   
    $image_exts = array( 'image/jpg', 'image/jpeg', 'image/jpe', 'image/gif', 'image/png' );

    //checking the above mime-type
    if (in_array($mime_type, $image_exts)) { 

        // the image link would be great
        $large = wp_get_attachment_image_src( $id, 'large');
        $xlarge = wp_get_attachment_image_src( $id, 'xlarge');

        $html = '<div class="solofolio-post-image-asset"><div class="solofolio-post-image"><img src="'. $large[0] .'" style="max-width:' . $large[1] . 'px" data-retina="'. $xlarge[0] . '"/></div><p class="solofolio-image-caption">' . wptexturize($attachment->post_excerpt) . '</p></div>';
        
        return $html; // return new $html    
    }
        return $html;
}
add_filter('media_send_to_editor', 'solofolio_filter_images', 20, 2);*/


// Load GPS data from EXIF before it is wiped
function add_geo_exif($meta,$file,$sourceImageType) {
		$exif = @exif_read_data( $file );
			if (!empty($exif['GPSLatitude']))
				$meta['latitude'] = $exif['GPSLatitude'] ;
			if (!empty($exif['GPSLatitudeRef']))
				$meta['latitude_ref'] = trim( $exif['GPSLatitudeRef'] );
			if (!empty($exif['GPSLongitude']))
				$meta['longitude'] = $exif['GPSLongitude'] ;
			if (!empty($exif['GPSLongitudeRef']))
				$meta['longitude_ref'] = trim( $exif['GPSLongitudeRef'] );
	return $meta;
}
add_filter('wp_read_image_metadata', 'add_geo_exif','',3); 



include_once("includes/gallery.php");			// Include gallery shortcode replacement
include_once("includes/social-widget.php");		// Include social media widget
include_once("includes/caption-widget.php");		// Include caption media widget
include_once("includes/customize.php");			// Include WP_customize structure

add_action ('admin_menu', 'solofolio_customize');
function solofolio_customize() {
    // add the Customize link to the admin menu
    add_theme_page( 'Customize', 'Customize', 'edit_theme_options', 'customize.php' );
}

?>