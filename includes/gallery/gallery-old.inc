/* 

Default Gallery 

*/

$output = apply_filters('gallery_style', "
	<div id='gallery-$selector' class='solo-smooth-gallery gallery galleryid-{$id}'>
	
	<script type=\"text/javascript\"> 
		var myGallery_1 = false;
		function startGallery_1() { 
			myGallery_1 = new gallery($('myGallery_1'), {                  
				timed: ". $bool_autoplay .",
				delay: ". get_option('sl_gallery_slide_duration') .",
				showCarousel: ". $bool_thumbnails .",         
				showInfopane: ". $bool_captions .",           
				showArrows: ". $bool_inner_arrows .",           
				embedLinks: false, 
				slideInfoZoneOpacity: 1, 
				fadeDuration: ". get_option('sl_gallery_transition_duration') ."
			});
		  
		  document.getElementById('myGallery_1').style.display = 'block';
		}
		window.addEvent('domready', startGallery_1);
	</script>
	<div class=\"solo-smooth-wrapper\" style=\"position: relative; width: 900px; height: 600px; border:0px solid; margin:0px auto; clear:both;\">");
	
	
	if ($bool_outer_arrows == "true") {
		$output .= "
		<div class=\"outerNavLeft\" class=\"outerNav\">
		<div class=\"outPad\"></div>
		<a class=\"outLeft\" href=\"javascript:myGallery_1.prevItem();\"></a>
		
		</div>
		
		
		<div class=\"outerNavRight\" class=\"outerNav\">
		
		<div class=\"outPad\"></div>
		
		<a  class=\"outRight\" href=\"javascript:myGallery_1.nextItem();\"></a>";
		
		
		if ($bool_autoplay == "true") {
			$output .= "<div class=\"outerPause\">
			<a class=\"outPause\" href=\"javascript:myGallery_1.clearTimer();\"></a>
			</div>";
		}
		
		if ($bool_thumbnails == "true") {
			$output .= "<div class=\"outerThumbs\">
			<a class=\"outThumbs\" href=\"javascript:myGallery_1.toggleCarousel();\"></a>
			</div>";
		}
		
		$output .="
		</div>";
	}
	
	$output .= "<div id=\"myGallery_1\" class=\"myGallery\" style=\"display:none; width: 900px !important; height: 600px !important;\">";

$i = 0;
foreach ( $attachments as $id => $attachment ) {
	$link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);
	
	$link2 = wp_get_attachment_url($id);
	$link3 = wp_get_attachment_image_src($id, 'thumbnail');

	

	$output .= "\n\n<div class=\"imageElement\">";
	
	$output .= "
	
	<h3>" .  wptexturize($attachment->post_title) . "</h3>  
	
	<p>" .  wptexturize($attachment->post_content) . "</p>  
	
	";
	
	$output .= "
		
		<a target=\"_blank\" href=\"$link2\"  title=\"open image\" class=\"open\"></a>
		
		<img src=\"$link2\" alt=\"open image\" class=\"full\" />
		
		<img src=\"". $link3[0] . "\" alt=\"full image\" class=\"thumbnail\" />
		
		";
	
	$output .= "</div>";
}

$output .= "</div>";

if ($bool_captions == "true") {
	$output .="<div id=\"myInfoContainer\"></div>";
}

$output .="</div><div class=\"clear\"></div></div>";
