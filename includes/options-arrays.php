<?php

$themename = "SoloFolio";
$shortname = "sl";

$options = array (
 
array( "name" => $themename." Options",
	"type" => "title"),
 

array( "name" => "Personalize",
	"type" => "section"),
	
	array( "name" => "Phone Number",
		"desc" => "Phone number above navigation.",
		"id" => $shortname."_phone",
		"type" => "text",
		"icon" => "phone",
		"std" => ""),
		
	array( "name" => "Email address",
		"desc" => "Email address above navigation.",
		"id" => $shortname."_email",
		"type" => "text",
		"icon" => "email",
		"std" => ""),	
		
	array( "name" => "Logo URL",
		"desc" => "Enter the link to your logo image. Max width: 350px",
		"id" => $shortname."_logo",
		"type" => "text",
		"icon" => "picture",
		"std" => ""),
		
	array( "name" => "Retina Logo URL",
		"desc" => "Enter the link to your logo image. Max width: 350px",
		"id" => $shortname."_logo_retina",
		"type" => "text",
		"icon" => "picture",
		"std" => ""),
		
	array( "name" => "Footer Text",
		"desc" => "Enter text used in footer.",
		"id" => $shortname."_footer_text",
		"type" => "text",
		"icon" => "textfield_rename",
		"std" => "&copy; 2012 Your Name Here"),
		
	array( "type" => "clear"),
		
	array( "name" => "Tracking Code",
		"id" => $shortname."_tracking_code",
		"type" => "textarea",
		"icon" => "script_code",
		"std" => ""),
		
	array( "type" => "clear"),

	array( "type" => "close"),

array( "name" => "Layout",
	"type" => "section"),
	
	/*array( "name" => "Sidebar Position",
		"desc" => "",
		"id" => $shortname."_sl_layout_index_sidebar",
		"type" => "select",
		"options" => array("Side", "Bottom"),
		"std" => "sans"),*/
		
	array( "name" => "Header Width",
		"desc" => "Format: XXpx",
		"id" => $shortname."_header_width",
		"type" => "text",
		"std" => "250"),
		
	array( "name" => "Header Height",
		"desc" => "Format: XXpx",
		"id" => $shortname."_header_height",
		"type" => "text",
		"std" => "70"),
		
	array( "name" => "Header Margin",
		"desc" => "Format: X X X X",
		"id" => $shortname."_header_margin",
		"type" => "text",
		"std" => "10px auto 0"),
	
	array( "name" => "Wrapper Width",
		"desc" => "Format: XXpx",
		"id" => $shortname."_wrapper_width",
		"type" => "text",
		"std" => "900"),
	
	array( "name" => "Wrapper Padding",
		"desc" => "Format: X X X X",
		"id" => $shortname."_wrapper_padding",
		"type" => "text",
		"std" => "0"),
		
	array( "name" => "Sidebar Width",
		"desc" => "Format: XXXpx",
		"id" => $shortname."_sidebar_width",
		"type" => "text",
		"std" => "175"),
		
	array( "name" => "Entry Width",
		"desc" => "Format: XXXpx",
		"id" => $shortname."_entry_width",
		"type" => "text",
		"std" => "900"),
		
	/*array( "name" => "Caption Width",
		"desc" => "Format: XXXpx",
		"id" => $shortname."_infocontainer_width",
		"type" => "text",
		"std" => ""),*/
		
	array( "name" => "Footer Width",
		"desc" => "Format: XXXpx",
		"id" => $shortname."_footer_width",
		"type" => "text",
		"std" => "900"),
	
	array( "type" => "clear"),
	
	array( "type" => "close"),
	
array( "name" => "Advanced",
	"type" => "section"),
		
	array( "name" => "Custom CSS",
		"desc" => "",
		"id" => $shortname."_custom_css",
		"type" => "textarea",
		"std" => ""),
		
	array( "name" => "Tracking Code - Header",
		"desc" => "You can paste your tracking code in this box. This will be automatically added to the header.",
		"id" => $shortname."_custom_head",
		"type" => "textarea",
		"std" => ""),
	
	array( "type" => "clear"),
		
	array( "name" => "Show footer",
		"desc" => "Show the footer?",
		"id" => $shortname."_show_footer",
		"type" => "select",
		"options" => array("yes", "no"),
		"std" => "yes"),
		
	array( "name" => "SoloFolio Link",
		"desc" => "",
		"id" => $shortname."_show_att",
		"type" => "select",
		"options" => array("yes", "no"),
		"std" => "yes"),
		
	array( "name" => "Show Author on Posts",
		"desc" => "",
		"id" => $shortname."_show_author",
		"type" => "select",
		"options" => array("yes", "no"),
		"std" => "yes"),
		
	array( "name" => "Show Category Above Posts",
		"desc" => "",
		"id" => $shortname."_show_category",
		"type" => "select",
		"options" => array("yes", "no"),
		"std" => "yes"),
		
	array( "name" => "Sidebar layout",
		"desc" => "",
		"id" => $shortname."_sidebar_layout",
		"type" => "select",
		"options" => array("no", "yes"),
		"std" => "yes"),
		
	array( "name" => "Header in wrapper",
		"desc" => "",
		"id" => $shortname."_header_inside",
		"type" => "select",
		"options" => array("yes", "no"),
		"std" => "yes"),
		
array( "type" => "clear"),
		
	array( "name" => "Favicon URL",
		"id" => $shortname."_favicon_url",
		"type" => "text",
		"icon" => "picture",
		"std" => ""),
		
	array( "name" => "iOS Icon URL",
		"id" => $shortname."_favicon_url",
		"type" => "text",
		"icon" => "picture",
		"std" => ""),
		
array( "type" => "clear"),

		array( "name" => "Maintenance Mode",
		"desc" => "",
		"id" => $shortname."_maintenance_mode",
		"type" => "checkbox",
		"std" => "false"),

array( "type" => "clear"),
	
	array( "type" => "close")
 
);

$options_design = array (
 
array( "name" => $themename." Design Options",
	"type" => "title"),
	
array(  "name" => "General", "type" => "section"),
	
		array( "name" => "Font",
			"id" => $shortname."_body_font",
			"type" => "select",
			"options" => array("sans", "serif"),
			"std" => "sans"),
			
		array( "name" => "Size",
			"id" => $shortname."_body_text_size",
			"type" => "text-short",
			"std" => "12px"),
			
		array( "name" => "Color",
			"id" => $shortname."_body_font_color",
			"target" => "de-preview",
			"attribute" => "color",
			"type" => "color",
			"std" => "AAAAAA"),
		
		array( "name" => "Background",
			"id" => $shortname."_color_body_bg",
			"target" => "de-preview",
			"attribute" => "backgroundColor",
			"type" => "color",
			"std" => "1a1a1a"),
			
		array( "name" => "Wrapper BG",
			"id" => $shortname."_color_wrapper_bg",
			"target" => "wrapper",
			"attribute" => "backgroundColor",
			"type" => "color",
			"std" => "1a1a1a"),	
			
		array( "name" => "Border",
			"id" => $shortname."_color_wrapper_border",
			"target" => "wrapper",
			"attribute" => "borderColor",
			"type" => "color",
			"std" => "1A1A1A"),
			
		array( "type" => "clear"),
			
array( "type" => "close"),

array( "name" => "Links", "type" => "section"),
		
		array( "name" => "Normal",
			"id" => $shortname."_body_link_color",
			"target" => "testLink",
			"attribute" => "color",
			"type" => "color",
			"std" => "AAAAAA"),
		
		array( "name" => "Hover",
			"id" => $shortname."_body_link_color_hover",
			"type" => "color",
			"std" => "FFFFFF"),
		
		array( "type" => "clear"),
			
array( "type" => "close"),
	
array( "name" => "Titles", "type" => "section"),
		
		array( "name" => "Page",
			"id" => $shortname."_page_h2_color",
			"target" => "pageTitle",
			"attribute" => "color",
			"type" => "color",
			"std" => "FFFFFF"),
			
		array( "name" => "Sidebar",
			"id" => $shortname."_sidebar_h2_color",
			"type" => "color",
			"std" => "FFFFFF"),
		
		array( "type" => "clear"),
			
array( "type" => "close"),
	
array( "name" => "Forms", "type" => "section"),
		
		array( "name" => "Text Color",
			"id" => $shortname."_input_color",
			"attribute" => "color",
			"type" => "color",
			"std" => "CCCCCC"),
			
		array( "name" => "Border Color",
			"id" => $shortname."_input_border_color",
			"type" => "color",
			"std" => "CCCCCC"),
		
		array( "type" => "clear"),
			
array( "type" => "close"),
	
array( "name" => "Header", "type" => "section"),
	
		array( "name" => "Font",
			"id" => $shortname."_header_font",
			"type" => "select",
			"options" => array("sans", "serif"),
			"std" => "sans"),
		
		array( "name" => "Size",
			"id" => $shortname."_header_font_size",
			"type" => "text-short",
			"std" => "12px"),
			
		array( "name" => "Color",

			"id" => $shortname."_header_font_color",
			"target" => "header-right",
			"attribute" => "color",
			"type" => "color",
			"std" => "CCCCCC"),
		
		array( "name" => "Background",
			"id" => $shortname."_header_bg",
			"target" => "header",
			"attribute" => "backgroundColor",
			"type" => "color",
			"std" => "1a1a1a"),
		
		array( "type" => "clear"),
			
array( "type" => "close"),
	
array( "name" => "Navigation", "type" => "section"),
			
		array( "name" => "Font",
			"id" => $shortname."_menu_font",
			"type" => "select",
			"options" => array("sans", "serif"),
			"std" => "sans"),
			
		array( "name" => "Size",
			"id" => $shortname."_menu_a_font_size",
			"type" => "text-short",
			"std" => "14px"),
			
		array( "name" => "Dropdown",
			"id" => $shortname."_menu_dropdown_font_size",
			"type" => "text-short",
			"std" => "12px"),
			
		array( "name" => "Color",
			"id" => $shortname."_menu_a_color",
			"target" => "suckerfishnav",
			"attribute" => "color",
			"type" => "color",
			"std" => "AAAAAA"),
		
		array( "name" => "Hover",
			"id" => $shortname."_menu_a_hover_color",
			"type" => "color",
			"std" => "FFFFFF"),
			
		array( "name" => "Background",
			"id" => $shortname."_menu_bg",
			"target" => "suckerfishnav",
			"attribute" => "backgroundColor",
			"type" => "color",
			"std" => "1a1a1a"),
			
		array( "type" => "clear"),
			
array( "type" => "close"),
	
array( "name" => "Footer", "type" => "section"),
		
		array( "name" => "Color",
			"id" => $shortname."_footer_font_color",
			"target" => "de-footer",
			"attribute" => "color",
			"type" => "color",
			"std" => "AAAAAA"),
			
		array( "name" => "Size",
			"id" => $shortname."_footer_font_size",
			"type" => "text-short",
			"std" => "12px"),
		
		array( "name" => "Link",
			"id" => $shortname."_footer_link_color",
			"target" => "footerLink",
			"attribute" => "color",
			"type" => "color",
			"std" => "AAAAAA"),
		
		array( "name" => "Hover",
			"id" => $shortname."_footer_link_color_hover",
			"type" => "color",
			"std" => ""),
		
		array( "type" => "clear"),
	
array( "type" => "close"),
		
array( "name" => "Blog", "type" => "section"),
		
		array( "name" => "Title",

			"id" => $shortname."_entry_header_color",
			"target" => "de-title",
			"attribute" => "color",
			"type" => "color",
			"std" => "FFFFFF"),
			
		array( "name" => "(Hover)",

			"id" => $shortname."_entry_header_color_hover",
			"type" => "color",
			"std" => "CCCCCC"),
			
		array( "name" => "Byline",

			"id" => $shortname."_entry_date_color",
			"type" => "color",
			"std" => "CCCCCC"),
			
		array( "name" => "Divider",

			"id" => $shortname."_entry_divider",
			"target" => "de-entry",
			"attribute" => "borderBottomColor",
			"type" => "color",
			"std" => "CCCCCC"),
		
		array( "type" => "clear"),
	
array( "type" => "close"),
			
array( "name" => "Images / Gallery", "type" => "section"),
	
		/*array( "name" => "Font",
			"id" => $shortname."_sologallery_caption_font",
			"type" => "select",
			"options" => array("Helvetica,Verdana,Arial,Utkal,sans-serif", "georgia,times,serif"),
			"std" => "Helvetica,Verdana,Arial,Utkal,sans-serif"),*/

		array( "name" => "Font",
			"id" => $shortname."_sologallery_caption_font",
			"type" => "select",
			"options" => array("sans-serif", "serif"),
			"std" => "sans"),
			
		array( "name" => "Size",
			"id" => $shortname."_sologallery_caption_font_size",
			"type" => "text-short",
			"std" => "12px"),
		
		array( "name" => "Color",
			"id" => $shortname."_gallery_caption_color",
			"target" => "de-caption",
			"attribute" => "color",
			"type" => "color",
			"std" => "878787"),	
	
		array( "name" => "Image Border",
			"id" => $shortname."_image_border_color",
			"target" => "de-img",
			"attribute" => "borderColor",
			"type" => "color",
			"std" => "333333"),
		
		/*array( "name" => "Gallery Border",
			"id" => $shortname."_sologallery_border",
			"type" => "color",
			"std" => "000000"),*/
			
		array( "name" => "Gallery BG",
			"id" => $shortname."_gallery_bg",
			"type" => "color",
			"std" => "1a1a1a"),
			
		array( "name" => "Caption BG",
			"id" => $shortname."_gallery_caption_bg",
			"type" => "color",
			"std" => "1a1a1a"),
	
		array( "type" => "clear"),
	
array( "type" => "close")
	
);

$options_gallery = array (
 
array( "name" => $themename." Gallery Options",
	"type" => "title"),
	
array( "name" => "Defaults",
	"type" => "section"),
	
	array( "name" => "Default Gallery Format",
		"id" => $shortname."_gallery_type",
		"type" => "select",
		"options" => array("slideshow", "side-scroll"),
		"std" => "slideshow"),
	
array( "type" => "clear"),
	
array( "type" => "close"),	

array( "name" => "Slideshow",
	"type" => "section"),

	array( "name" => "Transition",
		"id" => $shortname."_gallery_transition",
		"type" => "select",
		"options" => array("none", "fade", "flash", "pulse", "slide", "fadeslide"),
		"std" => "none"),
		
	array( "name" => "Length",
		"id" => $shortname."_gallery_transition_duration",
		"type" => "text-short",
		"suffix" => "ms",
		"std" => "500"),
		
	array( "name" => "Auto-Play",
		"id" => $shortname."_gallery_autoplay",
		"type" => "checkbox",
		"std" => "false"),

	array( "name" => "Slide Duration",
		"id" => $shortname."_gallery_slide_duration",
		"type" => "text-short",
		"suffix" => "ms",
		"std" => "9000"),
	
array( "type" => "clear"),
	
	array( "name" => "Overlay Controls",
		"id" => $shortname."_gallery_image_nav",
		"type" => "checkbox",
		"std" => "true"),
		
	array( "name" => "Opacity",
		"id" => $shortname."_gallery_outside_controls_opacity",
		"type" => "text-short",
		"std" => "0.1"),
		
	array( "name" => "Opacity - Hover",
		"id" => $shortname."_gallery_outside_controls_opacity_hover",
		"type" => "text-short",
		"std" => "0.6"),
		
array( "type" => "clear"),
		
	array( "name" => "Icon Color",
		"id" => $shortname."_gallery_outside_color",
		"type" => "select",
		"options" => array("Light", "Dark"),
		"std" => "Light"),
		
	array( "name" => "Thumbnails",
		"id" => $shortname."_gallery_thumbnails",
		"type" => "checkbox",
		"std" => "true"),
		
	array( "name" => "Captions",
		"id" => $shortname."_gallery_captions",
		"type" => "checkbox",
		"std" => "true"),
		
	array( "name" => "Fullscreen",
		"id" => $shortname."_gallery_fullscreen",
		"type" => "checkbox",
		"std" => "true"),
		
array( "type" => "clear"),
		
	array( "name" => "Width",
		"id" => $shortname."_gallery_width",
		"type" => "text-short",
		"suffix" => "px",
		"std" => "900"),
		
	array( "name" => "Height",
		"id" => $shortname."_gallery_height",
		"type" => "text-short",
		"suffix" => "px",
		"std" => "600"),
		
array( "type" => "clear"),
	
array( "type" => "close"),

array( "name" => "Side-Scroll",
	"type" => "section"),
	
	array( "name" => "Padding Between Images",
		"id" => $shortname."_gallery_sidescroll_padding",
		"type" => "text-short",
		"suffix" => "px",
		"std" => "20"),
		
	array( "name" => "Use for Mobile Devices",
		"id" => $shortname."_gallery_mobile_toggle",
		"type" => "checkbox",
		"std" => "true"),
		
	array( "type" => "clear"),
		
array( "type" => "close")

);

?>
