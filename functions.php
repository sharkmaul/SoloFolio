<?php

if (get_option('sl_sidebar_layout') == 'yes') { 
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
}

if (get_option('sl_sidebar_layout') != 'yes') { 
if(function_exists('register_sidebar')){
	register_sidebar(array('name' => 'Sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array('name' => 'Bottom Left',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array('name' => 'Bottom Center-Left',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array('name' => 'Bottom Center-Right',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	register_sidebar(array('name' => 'Bottom Right',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}
}

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
$fixImageMargins = new fixImageMargins();


include_once("includes/gallery.php");			// Include gallery shortcode replacement
include_once("includes/gallery-settings.php");	// Include gallery settings page
include_once("includes/gallery-upload.php");	// Include gallery upload filter
include_once("includes/photoshelter.php");		// Include photoshelter code
include_once("includes/design-editor.php");		// Include design editor code (deprecated now)
include_once("includes/options.php");			// Include admin option menu
include_once("includes/options-arrays.php");	// Include admin options lists
include_once("includes/social-widget.php");		// Include social media widget

// Add WP2.9 thumbnail support
if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

register_nav_menus( array(
		'primary' => __( 'Main Navigation', 'solofolio' ),
	) );


$themename = "SoloFolio";
$shortname = "sl";


function solofolio_add_admin() {
 
global $themename, $shortname, $options, $options_design, $options_gallery;

	if ( $_GET['page'] == 'solofolio-gallery-settings' ) {
	
		if ( 'save' == $_REQUEST['action'] ) {
		
			
			foreach ($options_gallery as $value) {
				update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
			}
	 
			foreach ($options_gallery as $value) {
				if( isset( $_REQUEST[ $value['id'] ] ) ) { 
					update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); 
				} else { 
					delete_option( $value['id'] ); 
				} 
			}
			 
			header("Location: admin.php?page=solofolio-gallery-settings&saved=true");
			die; 
		
		}
	}
	
	
	if ( $_GET['page'] == 'solofolio-design-editor' ) {
	 
		if ( 'save' == $_REQUEST['action'] ) {
		
			foreach ($options_design as $value) {
				update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
			}
	 
			foreach ($options_design as $value) {
				if( isset( $_REQUEST[ $value['id'] ] ) ) { 
					update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); 
				} else { 
					delete_option( $value['id'] ); 
				} 
			}
			 
			header("Location: admin.php?page=solofolio-design-editor&saved=true");
			die; 
		
		}
	}
	 
	if ( $_GET['page'] == basename(__FILE__) ) {
	 
		if ( 'save' == $_REQUEST['action'] ) {
	 
			foreach ($options as $value) {
				update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
			}
	 
			foreach ($options as $value) {
				if( isset( $_REQUEST[ $value['id'] ] ) ) { 
					update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); 
				} else { 
					delete_option( $value['id'] ); 
				} 
			}
			 
			header("Location: admin.php?page=functions.php&saved=true");
			die; 
		
		} else if( 'reset' == $_REQUEST['action'] ) {
	 
			foreach ($options as $value) {
				delete_option( $value['id'] ); 
			}
		 
			header("Location: admin.php?page=functions.php&reset=true");
			die;
	 
		}
	}

	//add_menu_page($themename, 'SoloFolio', 'administrator', 'solofolio', 'solofolio_admin', '', 28);
	add_menu_page($themename, 'SoloFolio', 'administrator', 'functions.php', 'solofolio_admin', '', 28);
	add_submenu_page('functions.php', 'General Settings', 'General', 'administrator', 'functions.php', 'solofolio_admin');
	add_submenu_page('functions.php', 'Design Editor', 'Design', 'administrator', 'solofolio-design-editor', 'solofolio_design_editor');
	add_submenu_page('functions.php', 'Gallery Settings', 'Gallery', 'administrator', 'solofolio-gallery-settings', 'solofolio_gallery_settings');
	add_submenu_page('functions.php', 'Photoshelter Admin', 'Photoshelter', 'administrator', 'solofolio-photoshelter', 'solofolio_photoshelter');
}

function solofolio_add_init() {

	$file_dir=get_bloginfo('template_directory');
	wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");
	wp_enqueue_style("jquery-ui", $file_dir."/functions/jquery-ui.css", "all");
	wp_enqueue_script("jcolor", $file_dir."/functions/jscolor.js");
	wp_enqueue_script("jquery-cookie", $file_dir."/functions/jquery.cookie.js");
	wp_enqueue_script('jquery');            
	wp_enqueue_script('jquery-ui-core'); 
	wp_enqueue_script('jquery-ui-tabs'); 
	}
	
function solofolio_admin() {
 
global $themename, $shortname, $options, $options_design;
$i=0;

?>

<div id="options-wrapper" name="top">

<form method="post">

<?php

solofolio_options($options);

?>

<input type="hidden" name="action" value="save" />
</form>


</div> 


 
<?php
}
?>
<?php
add_action('admin_init', 'solofolio_add_init');
add_action('admin_menu', 'solofolio_add_admin');
?>
