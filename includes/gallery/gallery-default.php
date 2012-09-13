<?php

$output .="<div class=\"galleria\" class=\"galleria-container notouch\">";

$i = 0;
	
foreach ( $attachments as $id => $attachment ) {
	$link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);
	
	$link2 = wp_get_attachment_url($id);
	$link3 = wp_get_attachment_image_src($id, 'thumbnail');
	$link4 = wp_get_attachment_image_src($id, 'large');
	
	$output .= "
		
		<a href=\"" . $link4[0] . "\" rel=\"" . $link2 . "\">
			<img  class=\"full\" alt=\"" .  wptexturize($attachment->post_excerpt) . "\" src=\"". $link3[0] . "\"/>			
		</a>
		
		
		";
} // End ForEach

	$output .= "</div>";
	
	$output .= "<div class=\"galleriabar\">";
		$output .= "<div class=\"galleria-controls\">
						<a id=\"prev\" href\"#\">Prev</a>
						<div class=\"galleria-counter\">
							<span id=\"index\"></span> of 
							<span id=\"total\"></span>
						</div>
						<a id=\"next\" href\"#\">Next</a> 
						<a id=\"fullscreen\" href\"#\">Fullscreen</a>
						<a id=\"play\">Slideshow</a>
						<a class=\"galleria-thumblink\"></a>
					</div>";
		$output .= "<div class=\"galleria-info\"></div>";
	$output .= "</div>";

add_action('wp_footer', 'test');
 
function test() {
     
    $output .= " <script type=\"text/javascript\">$('.galleria').galleria({";

		if ($captions == "false"){$output.= "showInfo: false,";}
		if ($transition != ""){$output.= "transition: '" .  $transition . "',";}
		if ($speed != ""){$output.= "transitionSpeed: " .  $speed . ",";}
		if ($shownav != ""){$output.= "showImagenav: " .  $shownav . ",";}
		if ($showcounter != ""){$output.= "showCounter: " .  $showcounter . ",";}
		if ($autoplay == "true"){$output.= "autoplay: true,";}
		if ($width != ""){$output.= "width: " .  $width . ",";}
		if ($height != ""){$output.= "height: " .  $height . ",";} else {$output.= "height: .667,";}
		if ($fullscreen== "false"){$output.= "_showFullscreen: false,";}
	
		$output.="swipe: true,";
		$output.="responsive: true,";
		$output.="maxScaleRatio: 1,";
		$output.="trueFullscreen: true";

	$output.= " });";
	
	$output.= "Galleria.ready(function() {
				var gallery = this, data;
				$('#prev').click(function() {
					gallery.prev();
				});
				$('#next').click(function() {
					gallery.next();
				});
				$('#fullscreen').click(function() {
					gallery.toggleFullscreen();
				});
				$('#play').click(function() {
					gallery.playToggle();
				});
				this.bind('image', function(e) {
					data = e.galleriaData;
					$('.galleria-info').html('<div class=\"galleria-info-description\">'+data.description+'</div>' );
				});
				this.bind('image', function(e) {
					data = e.index;
					$('#index').html(data + 1);
				});
				this.bind('image', function(e) {
					data = e.index;
					$('#index').html(data + 1);
				});
				$('#total').append(this.getDataLength());
			});";
	
	$output.= "</script>";
	
	$output.= "\n<style>";
	
	if ($showthumbnails== "false"){
		$output.= ".galleria-thumblink {display:none} ";
		};
		
	if ($showplay== "false"){
		$output.= ".galleria-play {display:none} ";
		};
	
	$output.="</style>\n";


     
    echo $output;
 
}

?>
