<?php
/* 
SoloFolio
Gallery Template: React (Picturefill hack)
*/
?>


<?php
$output .="<script type=\"text/javascript\" src=\"";

$insurl = get_bloginfo('template_url');
$output .= $insurl;

$output .="/includes/gallery/js/matchmedia.js\"></script>";

$output .="<script type=\"text/javascript\" src=\"";

$output .= $insurl;

$output .="/includes/gallery/js/picturefill.js\"></script>";

$i = 0;
	
foreach ( $attachments as $id => $attachment ) {
	$link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);
	
	$link2 = wp_get_attachment_url($id);
	$link3 = wp_get_attachment_image_src($id, 'thumbnail');
	$link4 = wp_get_attachment_image_src($id, 'large');
	$link5 = wp_get_attachment_image_src($id, 'xlarge');
	$link6 = wp_get_attachment_image_src($id, 'medium');
	
	$output .= "
		
		<div class=\"sl-react\" data-picture data-alt=\"" .  wptexturize($attachment->post_excerpt) . "\">
			<div data-src=\"" . $link6[0] . "\"></div>
			<div data-src=\"" . $link4[0] . "\" data-media=\"(min-width: 320px)\"></div>
			<div data-src=\"" . $link5[0] . "\" data-media=\"(min-width: 1000px)\"></div>

			<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			<noscript><img src=\"" . $link6[0] . "\" alt=\"A giant stone face at The Bayon temple in Angkor Thom, Cambodia\"></noscript>
		</div>
		
		";
} // End ForEach


add_action('wp_footer', 'sl_react');
 
function sl_react() {
     

	
	$output.="<script type=\"text/javascript\"> 
	$(window).load(function(){
		var setResponsive = function () {
		  var pageHeight = jQuery(window).height();
		  var blockHeight = $(\"#block\").outerHeight();
		  $('img').css('max-height', pageHeight - blockHeight); 
		}
		$(window).resize(setResponsive);
		setResponsive();
	});

	</script>";


     
    echo $output;
 
}

?>
