<?php
/* 
SoloFolio
Gallery Template: Cycle-React (Picturefill + jQuery Cycle hack)
*/

$output .="<div id=\"solofolio-cyclereact-wrap\">";

$output .="<div id=\"solofolio-cyclereact-stage\">";

$output .="<div id=\"solofolio-cyclereact-images\" class=\"cycle-slideshow\" data-cycle-slides=\"div.solofolio-cycelereact-slide\"
data-cycle-prev=\".prev\"
data-cycle-next=\".next\"
data-cycle-auto-height=0
data-cycle-fx=\"fade\"
data-cycle-center-horz=true
data-cycle-timeout=0
>";

$i = 0;
	
foreach ( $attachments as $id => $attachment ) {
	$link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);
	
	$link2 = wp_get_attachment_url($id);
	$link3 = wp_get_attachment_image_src($id, 'thumbnail');
	$link4 = wp_get_attachment_image_src($id, 'large');
	$link5 = wp_get_attachment_image_src($id, 'xlarge');
	$link6 = wp_get_attachment_image_src($id, 'medium');
	
	$output .= "
		
		<div class=\"solofolio-cycelereact-slide\">
		<div class=\"solofolio-cycelereact-fill\" data-picture data-cycle-title=\"" .  wptexturize($attachment->post_excerpt) . "\">
			<div data-src=\"" . $link6[0] . "\"></div>
			<div data-src=\"" . $link4[0] . "\" data-media=\"(min-width: 320px)\"></div>
			<div data-src=\"" . $link5[0] . "\" data-media=\"(min-width: 920px)\"></div>

			<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			<noscript><img src=\"" . $link6[0] . "\" alt=\"" .  wptexturize($attachment->post_excerpt) . "\"></noscript>
		</div>
		<p class=\"solofolio-cyclereact-caption\">" .  wptexturize($attachment->post_excerpt) . "</p>
		</div>
		
		";
} // End ForEach

$output .= "</div>";

$output .="<div class=\"solofolio-cyclereact-image-nav\">
		<div class=\"solofolio-cyclereact-nav-right next\"></div>
		<div class=\"solofolio-cyclereact-nav-left prev\"></div>
	</div>";

$output .= "</div>";

$output .="<div id=\"solofolio-cyclereact-controls\">
			<p id=\"solofolio-cyclereact-caption\"></p>
			<p id=\"solofolio-cyclereact-counter\"></p>
        	<a href=\"#\"><span class=\"prev\">Prev</span></a> 
        	<a href=\"#\"><span class=\"next\">Next</span></a>
        	<a href =\"#\" onclick=\"$(document).fullScreen(true)\">Fullscreen</a>
    	</div>";

$output .= "</div>";





add_action('wp_footer', 'sl_cyclereact');
 
function sl_cyclereact() {
	
	// Output necessary JS. This can't be mobile friendly.
	$output .="<script type=\"text/javascript\" src=\"" . get_bloginfo('template_url') . "/includes/gallery/js/matchmedia.js\"></script>";

	$output .="<script type=\"text/javascript\" src=\"" . get_bloginfo('template_url') . "/includes/gallery/js/picturefill.js\"></script>";

	$output .="<script type=\"text/javascript\" src=\"" . get_bloginfo('template_url') . "/includes/gallery/js/jquery.cycle2.min.js\"></script>";

	$output .="<script type=\"text/javascript\" src=\"" . get_bloginfo('template_url') . "/includes/gallery/js/jquery.cycle2.center.js\"></script>";

	$output .="<script type=\"text/javascript\" src=\"" . get_bloginfo('template_url') . "/includes/gallery/js/jquery.fullscreen-min.js\"></script>";
	
	// Make things fit nicely 
	$output.="
	<script type=\"text/javascript\"> 
	$(window).load(function(){
		var setResponsive = function () {
		  var pageHeight = jQuery(window).height();
		  var blockHeight = $(\".solofolio-cyclereact-caption\").outerHeight();
		  $('img').css('max-height', pageHeight - blockHeight - 40);
		  $('.solofolio-cyclereact-nav-left').css('height', pageHeight - blockHeight - 60);
		  $('.solofolio-cyclereact-nav-right').css('height', pageHeight - blockHeight - 60);
		}
		$(window).resize(setResponsive);
		setResponsive();
	});</script>";
	
	// Allow keyboard control
	$output.="<script type=\"text/javascript\">$(document.documentElement).keyup(function (e) {
		if (e.keyCode == 39)
		{        
		   $('#solofolio-cyclereact-images').cycle('next');
		}

		if (e.keyCode == 37)
		{
			$('#solofolio-cyclereact-images').cycle('prev');
		}

	});</script>";
     
    echo $output;
 
}

?>
