<?php 
@header('Content-type: text/css' );
include "../../../wp-load.php";

global $options, $options_design, $options_gallery;
foreach ($options as $value) {
	if (get_option( $value['id'] ) === FALSE) { $value['id'] = $value['std']; }
	else { $value['id'] = get_option( $value['id'] ); }
	}

foreach ($options_design as $value) {
	if (get_option( $value['id'] ) === FALSE) { $value['id'] = $value['std']; }
	else { $value['id'] = get_option( $value['id'] ); }
	}
	
foreach ($options_gallery as $value) {
	if (get_option( $value['id'] ) === FALSE) { $value['id'] = $value['std']; }
	else { $value['id'] = get_option( $value['id'] ); }
	}
	
/*
SoloFolio Custom Styles 
*/

if (get_option('sl_styleset') == '') { ?>

<?php };
if (get_option('sl_styleset') == 'Light') { ?>
@import url("styles/light.css");

h2,
a:hover, 
a:active, 
#footer a:hover,
.post-title a,
.post-title a:hover,
.sidebar h3,
.current-menu-item a,
.current_page_item a,
.current_page_parent a
{
	color: #<?php echo get_option('sl_accent_color'); ?>;
}

<?php };
if (get_option('sl_styleset') == 'Dark') { ?>


h2,
a:hover, 
a:active, 
#footer a:hover,
.post-title a,
.post-title a:hover,
.sidebar h3,
.current-menu-item a,
.current_page_item a,
.current_page_parent a
{
	color: #<?php echo get_option('sl_accent_color'); ?>;
}

<?php }; ?>

/*body {
	background: url("img/texture.png") repeat scroll 0 0 transparent;
}*/


#post #outerWrap {
	margin: 0 auto;
	width: <?php echo (get_option('sl_wrapper_width') + get_option('sl_wrapper_padding') + get_option('sl_wrapper_padding')); ?>px;
	}

#wrapper {
	padding: <?php echo get_option('sl_wrapper_padding'); ?>px;
	width: <?php echo get_option('sl_wrapper_width'); ?>px;
}
	
#header {
	margin: <?php echo get_option('sl_header_margin'); ?>;
	height: <?php echo get_option('sl_header_height'); ?>px;
	width: <?php echo get_option('sl_header_width'); ?>px;
}
	
#sidebar, #searchform input {
	width: <?php echo get_option('sl_sidebar_width'); ?>px;
}
	
#content-index, #content-single, #content-page-sidebar {
	width: <?php echo get_option('sl_entry_width'); ?>px;
}

#myInfoContainer {
	width: <?php echo get_option('sl_infocontainer_width'); ?>px;
	}
	
.outerNavLeft {
	margin-left: -<?php echo (get_option('sl_wrapper_padding') + 60); ?>px;
	}
	
.outerNavRight {
	margin-right: -<?php echo (get_option('sl_wrapper_padding') + 60); ?>px;
	} 
	
a.outPause, a.outThumbs, a.outLeft, a.outRight {
	opacity: <?php echo get_option('sl_gallery_outside_controls_opacity'); ?>;
	}
	
	a.outPause:hover, a.outThumbs:hover, a.outLeft:hover, a.outRight:hover {
		opacity: <?php echo get_option('sl_gallery_outside_controls_opacity_hover'); ?>;
		background-color: #<?php echo get_option('sl_gallery_outside_controls_bg'); ?>;
		}
		
.galleria-image-nav-left, .galleria-image-nav-right {
	opacity: <?php echo get_option('sl_gallery_outside_controls_opacity'); ?>;
}

.galleria-image-nav-left:hover, .galleria-image-nav-right:hover {
	opacity: <?php echo get_option('sl_gallery_outside_controls_opacity_hover'); ?>;
}

<?php

if (get_option('sl_gallery_outside_color') == 'Dark') {?>

a.outLeft {
	background: url('gallery/sg/css/img/dark-left.png') no-repeat center left;
}

a.outRight {
	background: url('gallery/sg/css/img/dark-right.png') no-repeat center right;
}

a.outPause {
	background: url('gallery/sg/css/img/dark-pause.png') no-repeat center right;
}

a.outThumbs {
	background: url('gallery/sg/css/img/dark-thumbs.png') no-repeat center right;
}

<?php }; ?>
		
/*a.outLeft:hover, a.outRight:hover {
	background-color: #<?php echo get_option('sl_gallery_outside_controls_bg'); ?>;
}*/


body {
	background-color: #<?php echo get_option('sl_color_body_bg'); ?>;
	color: #<?php echo get_option('sl_body_font_color'); ?>;
	font-size: <?php echo get_option('sl_body_font_size'); ?>;
}
	
h2 {
	color: #<?php echo get_option('sl_page_h2_color'); ?>;
}
	
p {
	font-size: <?php echo get_option('sl_body_text_size'); ?>;
}

input, textarea  {
	color: #<?php echo get_option('sl_input_color'); ?>;
	}
	
a:link, a:visited {
	color: #<?php echo get_option('sl_body_link_color'); ?>;
}

a:hover, a:active {
	color: #<?php echo get_option('sl_body_link_color_hover'); ?>;
}


/* Header */
	
#header {
	background-color: #<?php echo get_option('sl_header_bg'); ?>;
	color: #<?php echo get_option('sl_header_font_color'); ?>;
	font-size: <?php echo get_option('sl_header_font_size'); ?>;
}

/* Wrapper */

#wrapper {
	background-color: #<?php echo get_option('sl_color_wrapper_bg'); ?>;
	border: 1px solid #<?php echo get_option('sl_color_wrapper_border'); ?>;
}

/* Sidebar */

h3 {
	color: #<?php echo get_option('sl_sidebar_h2_color'); ?>;
}

/* Footer */

#footer {
	color: #<?php echo get_option('sl_footer_font_color'); ?>;
	font-size: <?php echo get_option('sl_footer_font_size'); ?>;
	width: <?php echo get_option('sl_footer_width'); ?>px;
}
	
	#footer a {
		color: #<?php echo get_option('sl_footer_link_color'); ?>;
	}
		
	#footer a:hover {
		color: #<?php echo get_option('sl_footer_link_color_hover'); ?>;
	}
	
/* Links */

a:link, a:visited {
	color: #<?php echo get_option('sl_body_link_color'); ?>;
	text-decoration: none;
}

a:hover, a:active { 
	color: #<?php echo get_option('sl_body_link_color_hover'); ?>;
	text-decoration: none;
}
	

	
/* Images */

img {
	border: 1px solid #<?php echo get_option('sl_image_border_color'); ?>;	
}

a img { 
	border: 1px solid #<?php echo get_option('sl_image_border_color'); ?>;	
}

	a:hover img { 
		border: 1px solid <?php echo get_option('sl_image_border_color'); ?>; 
	}

/* Posts */

.post-title a {
	color: #<?php echo get_option('sl_entry_header_color'); ?>;
}
	
	.post-title a:hover {
		color: #<?php echo get_option('sl_entry_header_color_hover'); ?>;
	}
		
.date, .post-cat {
	color: #<?php echo get_option('sl_entry_date_color'); ?>;
}

.entry {
	border-bottom: 1px solid #<?php echo get_option('sl_entry_divider'); ?>;
}

.commentlist li {
	border-bottom: 1px solid #<?php echo get_option('sl_entry_divider'); ?>;
}
	
.wp-caption p.wp-caption-text {
	color: #<?php echo get_option('sl_sologallery_caption'); ?>;
}
	
.wp-caption img {
	border: 1px solid# <?php echo get_option('sl_image_border_color'); ?>;
}

/* Navigation */

<?php if (get_option('sl_sidebar_layout') == 'no') {?>

#suckerfishnav {
	background-color: #<?php echo get_option('sl_menu_bg'); ?>;
	}

#suckerfishnav a, #header ul li a, #footer ul li a {
	color: #<?php echo get_option('sl_menu_a_color'); ?>;
	font-size: <?php echo get_option('sl_menu_a_font_size'); ?>;
}
		
#suckerfishnav li:hover a, #suckerfishnav li.sfhover a, #footer ul li a:hover {
	color: #<?php echo get_option('sl_menu_a_hover_color'); ?>;
}
	
#suckerfishnav li li a, #suckerfishnav li:hover li a, #suckerfishnav li li:hover li a, #suckerfishnav li li li:hover li a, #suckerfishnav li li li li:hover li a  {
	color: #<?php echo get_option('sl_menu_a_color'); ?>;
	font-size: <?php echo get_option('sl_menu_dropdown_font_size'); ?>;  
}
		    
#suckerfishnav li:hover a, #suckerfishnav li.sfhover a {
	color: #<?php echo get_option('sl_menu_a_hover_color'); ?>;
}

/* Dropdown link highlighting */
#suckerfishnav li ul li:hover a, #suckerfishnav li ul li li:hover a, #suckerfishnav li ul li li li:hover a, #suckerfishnav li ul li li li:hover a, #footer ul li a:hover {
	color: #<?php echo get_option('sl_menu_a_hover_color'); ?>;
	}

/* Dropdown font size */

#suckerfishnav li li a {
	font-size: <?php echo get_option('sl_menu_dropdown_font_size'); ?>;  
	}


/* Dropdown ul background */
#suckerfishnav li:hover ul, #suckerfishnav li li:hover ul, #suckerfishnav li li li:hover ul, #suckerfishnav li li li li:hover ul, #suckerfishnav li.sfhover ul, #suckerfishnav li li.sfhover ul, #suckerfishnav li li li.sfhover ul, #suckerfishnav li li li li.sfhover ul {
	left: auto;
	background-color: #<?php echo get_option('sl_color_body_bg'); ?>;
	}

<?php } ?>

/* Highlight current page item */

#header .current_page_item a, #header .current_page_parent a, #suckerfishnav .current_page_item a, #suckerfishnav .current_page_parent a, #footer .current_page_parent a, #footer .current_page_item a {
	color: #<?php echo get_option('sl_menu_a_hover_color'); ?>;
	}
	
#footer ul li a:hover {
	color: #<?php echo get_option('sl_menu_a_hover_color'); ?>;
}

/* Forms */

input, textarea {
	background-color: inherit;
	border: 1px solid #<?php echo get_option('sl_input_border_color'); ?>;
}
	
input:focus, textarea:focus {
	border: 1px solid #<?php echo get_option('sl_input_border_color'); ?>;
}	

/* Gallery Styles */

.galleria-bar {
	background-color: #<?php echo get_option('sl_gallery_caption_bg'); ?>;
}

.galleria-info {
	color: #<?php echo get_option('sl_gallery_caption_color'); ?>;
}

.galleria-stage {
	background-color: #<?php echo get_option('sl_gallery_bg'); ?>;
}

.sl-sidescroll-container {
	margin-right: <?php echo get_option('sl_gallery_sidescroll_padding'); ?>px;
}


<?php if (get_option('sl_gallery_outside_color') == 'Dark') {?>

.galleria-play {
    background-image: url(includes/gallery/js/b-playpause.png);
}

.galleria-fullscreen {
    background-image: url(includes/gallery/js/b-fullscreen.png);
}

.galleria-thumblink {
    background: url(includes/gallery/js/b-thumbs.png) no-repeat 50% 50%;
}

.galleria-counter {
	color: #000000;
}

.galleria-thumbnails-container {
	background-color: #ffffff;
}

.galleria-thumblink:hover,
.galleria-thumblink.open,
.galleria-fullscreen:hover,
.galleria-play:hover,
.galleria-popout:hover { background-color: #eee }

<?php } ?>
