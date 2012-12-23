<?php


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
			"std" => "222222"),
			
		array( "name" => "Wrapper BG",
			"id" => $shortname."_color_wrapper_bg",
			"target" => "wrapper",
			"attribute" => "backgroundColor",
			"type" => "color",
			"std" => "222222"),	
			
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
	
		array( "type" => "clear"),
	
array( "type" => "close")
	
);

?>
