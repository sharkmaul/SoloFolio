<?php

$output .="<div id=\"galleria\" class=\"galleria-container notouch\">";

$i = 0;
	
foreach ( $attachments as $id => $attachment ) {
	$link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);
	
	$link2 = wp_get_attachment_url($id);
	$link3 = wp_get_attachment_image_src($id, 'thumbnail');
	$link4 = wp_get_attachment_image_src($id, 'large');
	
	$output .= "
		
		<a href=\"" . $link4[0] . "\" rel=\"" . $link2 . "\">
			<img  class=\"full\" alt=\"" .  wptexturize($attachment->post_content) . "\" src=\"". $link3[0] . "\"/>			
		</a>
		
		
		";
} // End ForEach

	$output .= "</div>";
			
	$output .= " <script type=\"text/javascript\">

// Initialize Galleria

$('#galleria').galleria({";

	if ($captions == "false"){$output.= "showInfo: false,";}
	if ($transition != ""){$output.= "transition: '" .  $transition . "',";}
	if ($speed != ""){$output.= "transitionSpeed: " .  $speed . ",";}
	if ($shownav != ""){$output.= "showImagenav: " .  $shownav . ",";}
	if ($showcounter != ""){$output.= "showCounter: " .  $showcounter . ",";}
	if ($autoplay == "true"){$output.= "autoplay: true,";}
	if ($width != ""){$output.= "width: " .  $width . ",";}
	if ($height != ""){$output.= "height: " .  $height . ",";} else {$output.= "height: 680,";}
	
	if ($fullscreen== "false"){$output.= "showFullscreen: false,";}
	
	$output.="swipe: true,";
	$output.="responsive: true,";
	$output.="maxScaleRatio: 1,";
	$output.="trueFullscreen: true";

$output.= " });";

$output.=" var gallery = Galleria.get(0);

document.onkeyup = KeyCheck;       
function KeyCheck(e) {
    var KeyID = (window.event) ? event.keyCode : e.keyCode;
    switch(KeyID) {
        case 37: //press left arrow 
            gallery.prev();
            break;
        case 74: //press left arrow 
            gallery.prev();
            break;
        case 39: //press right arrow
            gallery.next();
            break;
        case 75: //press left arrow 
            gallery.next();
            break;
    }
}
</script>";

?>
