/**
 * This file adds some LIVE to the Theme Customizer live preview. To leverage
 * this, set your custom settings to 'postMessage' and then add your handling
 * here. Your javascript should grab settings from customizer controls, and 
 * then make any necessary changes to the page using jQuery.
 */
( function( $ ) {

	// Update the site title in real time...
	wp.customize( 'blogname', function( value ) {
		value.bind( function( newval ) {
			$( '#site-title a' ).html( newval );
		} );
	} );
	
	wp.customize( 'solofolio_phone', function( value ) {
		value.bind( function( newval ) {
			$( '#header-phone span' ).html( newval );
		} );
	} );
	
	wp.customize( 'solofolio_email', function( value ) {
		value.bind( function( newval ) {
			$( '#header-email a' ).html( newval );
		} );
	} );
	
	wp.customize( 'solofolio_footer_text', function( value ) {
		value.bind( function( newval ) {
			$( '#info-footer' ).html( newval );
		} );
	} );

	wp.customize( 'solofolio_background_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('background-color', newval );
		} );
	} );
	
	wp.customize( 'solofolio_body_font_size', function( value ) {
		value.bind( function( newval ) {
			$('body').css('font-size', newval );
		} );
	} );
	
	wp.customize( 'solofolio_body_font_color', function( value ) {
		value.bind( function( newval ) {
			$('body').css('color', newval );
		} );
	} );
	
	wp.customize( 'solofolio_body_link_color', function( value ) {
		value.bind( function( newval ) {
			$('a').css('color', newval );
		} );
	} );
	
	wp.customize( 'solofolio_body_link_color_hover', function( value ) {
		value.bind( function( newval ) {
			$('a:hover').css('color', newval );
		} );
	} );
	
	wp.customize( 'solofolio_navigation_font_size', function( value ) {
		value.bind( function( newval ) {
			$('#header-content li a').css('font-size', newval );
		} );
	} );
	
	wp.customize( 'solofolio_navigation_link_color', function( value ) {
		value.bind( function( newval ) {
			$('#header-content li a').css('color', newval );
		} );
	} );
	
	wp.customize( 'solofolio_navigation_link_color_hover', function( value ) {
		value.bind( function( newval ) {
			$('#header-content a:hover').css('color', newval );
			$('.current_page_item a').css('color', newval );
		} );
	} );
	
	wp.customize( 'solofolio_navigation_header_font_size', function( value ) {
		value.bind( function( newval ) {
			$('#header-content h3').css('font-size', newval );
		} );
	} );
	
	wp.customize( 'solofolio_blog_entry_title_size', function( value ) {
		value.bind( function( newval ) {
			$('h2.post-title').css('font-size', newval );
		} );
	} );
	
	wp.customize( 'solofolio_blog_entry_title_color', function( value ) {
		value.bind( function( newval ) {
			$('h2.post-title a').css('color', newval );
		} );
	} );
	
	wp.customize( 'solofolio_blog_entry_byline_color', function( value ) {
		value.bind( function( newval ) {
			$('.date').css('color', newval );
		} );
	} );
	
} )( jQuery );