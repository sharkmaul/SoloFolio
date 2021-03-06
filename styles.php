<?php 
/* 
SoloFolio
Theme - Dynamic styles

Lots of magic happening here. This deploys the custom styles generated by the WP Customize menu, plus some special calculations based on other settings. Also contains the responsive design core.
*/

@header('Content-type: text/css' ); // Output in proper CSS form
include "../../../wp-load.php"; // Pull into the loop
?>

#header {
	width: <?php echo get_theme_mod( 'solofolio_header_width', '200'); ?>px;
}

<?php if (get_theme_mod('solofolio_logo') == '') {?>
#logo-noimg {
	display: block;
}

#logo-img {
	display: none;
}
<?php } ?>

body {
	background-color: <?php echo get_theme_mod('solofolio_background_color'); ?>;
	color: <?php echo get_theme_mod('solofolio_body_font_color'); ?>;
	font-size: <?php echo get_theme_mod('solofolio_body_font_size'); ?>;
}

#header {
	background-color: <?php echo get_theme_mod('solofolio_background_color'); ?>;
}
	
/* Links */

a:link, a:visited {
	color: <?php echo get_theme_mod('solofolio_body_link_color'); ?>;
}

a:hover, a:active { 
	color: <?php echo get_theme_mod('solofolio_body_link_color_hover'); ?>;
}


/* Navigation */

#header-content li a {
	font-size: <?php echo get_theme_mod('solofolio_navigation_font_size'); ?>;
}

#header-content h3 {
	color: <?php echo get_theme_mod('solofolio_navigation_header_color'); ?>;
	font-size: <?php echo get_theme_mod('solofolio_navigation_header_font_size'); ?>;
}

#header-content a:link, #header-content a:visited {
	color: <?php echo get_theme_mod('solofolio_navigation_link_color'); ?>;
}

#header-content a:hover, #header-content a:active { 
	color: <?php echo get_theme_mod('solofolio_navigation_link_color_hover'); ?>;
}

/* Blog */

h2.post-title {
	font-size: <?php echo get_theme_mod('solofolio_blog_entry_title_size'); ?>;
}

	h2.post-title, h2.post-title a {
		color: <?php echo get_theme_mod('solofolio_blog_entry_title_color'); ?>;
	}
	
	.post-title a:hover {
		color: <?php echo get_theme_mod('solofolio_blog_entry_title_color_hover'); ?>;
	}
		
.date, .post-cat {
	color: <?php echo get_theme_mod('solofolio_blog_entry_byline_color'); ?>;
}
	
.wp-caption p.wp-caption-text, .solofolio-caption {
	color: <?php echo get_theme_mod('solofolio_body_caption_color'); ?>;
}

/* Highlight current page item */

#header #header-content .current_page_item a, #header #header-content .current_page_parent a {
	color: <?php echo get_theme_mod('solofolio_navigation_link_color_hover'); ?>;
	}
	
#footer ul li a:hover {
	color: <?php echo get_theme_mod('solofolio_body_link_color_hover'); ?>;
}

/* Forms */

input, textarea {
	background-color: inherit;
}
	
input:focus, textarea:focus {
}	

/* Gallery Styles */

.galleria-info {
	color: <?php echo get_theme_mod('solofolio_body_caption_color'); ?>;
}

.sl-sidescroll-container {
	margin-right: <?php echo get_theme_mod('solofolio_gallery_sidescroll_padding'); ?>px;
}

/* Slideshow cursor settings */

<?php if (get_theme_mod('solofolio_gallery_cursor_color') == 'light') {?>

.galleria-image-nav-left {
	cursor: url("img/prev.light.cur"), move;

}
.galleria-image-nav-right {
	cursor: url("img/next.light.cur"), move;
}

<?php } else { ?>

.galleria-image-nav-left {
	cursor: url("img/prev.dark.cur"), move;
}

.galleria-image-nav-right {
	cursor: url("img/next.dark.cur"), move;
}

<?php } ?>
	

<?php if (get_theme_mod('solofolio_gallery_icon_color') == 'dark') {?>
/* Dark slideshow controls (For light backgrounds) */

.galleria-controls .galleria-counter, .galleria-controls a {
	color: #000000;
}

.galleria-thumbnails-container {
	background-color: #ffffff;
}

<?php } ?>

#wrapper {
	left: <?php echo (get_theme_mod( 'solofolio_header_width', '200' ) + 40); ?>px;
	padding: 20px 20px 0 0;
	width: auto;
}

/* LARGE DESKTOP SCREENS - Build a custom wrapper to center blog on big screens */
@media (min-width: <?php echo (get_theme_mod( 'solofolio_header_width', '200' ) + 900 + 50); ?>px) {

	#outerWrap {
		position: relative;
		width: 100%;
	}
	
		#wrapper {
			max-width: 100%;
			}
	
	#post #outerWrap {
		margin: 0 auto;
		position: relative;
		max-width: <?php echo (get_theme_mod( 'solofolio_header_width', '200' ) + 920 + 40); ?>px;
	}
	
	#post #header {
		left: auto;
	}
}

/* Responsive design */

#content-index, #content-single {
	width: 100%;
}

	#content-index .entry .wp-caption {
		width: 100%;
	}	

#content-page p img {
	height: auto;
    width: 100%;
}

/* Break point - Tablet view */

@media only screen and (max-width: 1024px) {


	* {
		margin: 0;
		padding: 0;
	}
	
	img {
		border-left: none;
		border-right: none;
	}
	
	.wp-caption img {
		margin: 0;
		padding: 0;
		width: 100%;
		height: auto;
	}
	
	#header {
		height: auto;
		position: relative !important;
		margin: 0 0 10px 0;
		padding: 0;
		width: auto;
	}
	
		#logo-img {
			display: none;
		}
		
		#logo #logo-noimg {
			display: block;
		}
		
			#logo-noimg .description {
				display: none;
			}
	
		#header-content {
			padding: 0 0 10px 0;
		}
		
		#header #header-phone, #header #header-email {
			padding-right: 5px;
		}
   			
		#header div {
			margin: 0;
		}
		
		#header h3 {
			margin: 0;
			padding: 0;
		}
		
		#sidebar-footer {
			display: none;
		}
		
		#header #logo {
			margin: 0;
		}

	#wrapper {
		border: none;
		margin: 0;
		padding: 0;
		width: 100%;
		/*overflow: hidden;*/
		position: relative; 
		top: 0;
		left: 0;
		bottom:0px; 
	  	overflow:auto;
	}
	
		#content-index, #content-single, #content-search {
			padding: 10px 0 0;
		}
		
		.entry {
			border-bottom: medium none;
			padding: 10px;
			margin-bottom: 0;
		}
		
		p, h1, h2, h4, h6, .commentlist .date, #wrapper li {
			padding: 0 10px;
		}
			
			#comments .commentlist li {
				padding: 0;
			}
				
		img.alignnone {
			width: 100%;
			height: auto;
		}
		
		#wrapper a img {
			border: none;
			}
	
	#sidebar-footer {
		position: relative;
		height: auto;
		bottom: auto;	
		padding: 10px 8px;
        font-size: 14px;
        line-height: 18px;
	}
		
	#wrapper #content-index {
		width: 100%;
	}

	#content h1 { font-size: 22px; line-height: 30px; background-color: #000; color: #FFF; padding: 10px; }
	#header-content { display: none; }
	
	#header {
		min-width: 320px;
		left: auto;
		bottom: auto;
		margin: 0;
	}
		
		#header h3 {
			padding-top: 3px;
		}
	
		#sidebar-footer p {
   			display: inline;
   			text-align: center;
   		}
   		
   		#header ul li {
   			padding: 0;
   			font-size: 14px;
   		}
   		
   			#header ul li a {
   				display: block;
   				padding: 7px 0;
   			}
   			
   		#header-content {
   			text-align: center;
   		}
	
	.open {
		display: block; 
		position: fixed;
	}
	
		#logo {
			/*padding: 5px 0 5px 10px;*/
		}
	
	.galleria-info {
		padding: 7px 10px 0;
	}
	
	.entry {
		padding-left: 0;
		padding-right: 0;
	}
	
		.post-meta, .wp-caption-text, .entry p {
			padding: 0 10px;
		}
		
	#wrapper {
		min-width: 320px;
	}
	
	#post #outerWrap {
		width: 100%;
		}
	
	/* Menu icon */
	#menu-icon {
		display: block; /* show menu icon */
	}

}

/* Phone */
@media only screen and (max-width: 440px) {
	
	#content h1 {
		font-size: 14px;
	}
	
	/* Make mobile galleries scroll vertically. */
	
	#sl-sidescroll-wrap td {
		display: block;
		margin: 0;
		padding: 0;
		width: 100%;
	}
	
	#sl-sidescroll-wrap .sl-sidescroll-container {
		margin: 0 0 20px;
		max-width: 100% !important;
		width: 100% !important; /* HACK! Override image widths that were set for Retina iPad */
		height: auto !important; /* HACK! Override image widths that were set for Retina iPad */
	}
	
		.sl-sidescroll-container img {
			border: none;
			width: 100%;
		}
		
		.sl-sidescroll-container p {
			padding: 2px 10px;
		}
	
	/* Clean up Galleria */
		
	.galleria-thumblink, .galleria-fullscreen {
		display: none;
	}
	
}