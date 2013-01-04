<?php
/* 
SoloFolio
Gallery Template: Sidescroll2 - Picturefill/retina/you name it
*/

$output .="<script type=\"text/javascript\" src=\"";

$insurl = get_bloginfo('template_url');
$output .= $insurl;

$output .="/includes/gallery/js/matchmedia.js\"></script>";

$output .="<script type=\"text/javascript\" src=\"";

$output .= $insurl;

$output .="/includes/gallery/js/picturefill.js\"></script>";

$output .= "<script type=\"text/javascript\" charset=\"utf-8\">
		$(function(){
			$(\"#sl-sidescroll-wrap\").wrapInner(\"<table cellspacing=0 ><tr>\");
			$(\".sl-sidescroll-container\").wrap(\"<td>\");
		});
		
		$( document ).ready( function(){
    		setMaxWidth();
    		$( window ).bind(\"resize\", setMaxWidth );
    		function setMaxWidth() {
    			var pageHeight = jQuery(window).height();
    			var blockHeight = $(\".sl-sidescroll-container p\").outerHeight();
    			$('.sl-sidescroll-container').css('max-width', ($('#wrapper').innerWidth() - 30));
    			$('.sl-sidescroll-container img').css('max-height', pageHeight - blockHeight - 20 - 20); 
    		}

});

	</script>";
	
	$output .="<div id=\"solofolio-sidescroll2-wrap\">";
	
	$i = 0;
		
	foreach ( $attachments as $id => $attachment ) {
		$link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);
	
		$link2 = wp_get_attachment_url($id);
		$link3 = wp_get_attachment_image_src($id, 'thumbnail');
		$link4 = wp_get_attachment_image_src($id, 'large');
		$link5 = wp_get_attachment_image_src($id, 'xlarge');
		$link6 = wp_get_attachment_image_src($id, 'medium');
		
		$output .= "\n\n<div class=\"sl-sidescroll-container\">";
		
		$output .= "
		
		<div class=\"solofolio-sidescroll2\" data-picture data-alt=\"" .  wptexturize($attachment->post_excerpt) . "\">
			<div data-src=\"" . $link6[0] . "\"></div>
			<div data-src=\"" . $link4[0] . "\" data-media=\"(min-width: 320px)\"></div>
			<div data-src=\"" . $link5[0] . "\" data-media=\"(min-width: 320px) and (min-device-pixel-ratio: 2.0)\"></div>
			<div data-src=\"" . $link5[0] . "\" data-media=\"(min-width: 920px)\"></div>

			<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			<noscript><img src=\"" . $link6[0] . "\" alt=\"" .  wptexturize($attachment->post_excerpt) . "\"></noscript>
		</div>
		
		<p class=\"solofolio-sidescroll2-caption\">" .  wptexturize($attachment->post_excerpt) . "</p>
		
		</div>";
		
		$i += 1;
		
	} // end foreach
		
		$output .= "</div>";
?>
