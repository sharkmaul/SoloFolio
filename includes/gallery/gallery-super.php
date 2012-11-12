<?php
/* 
SoloFolio
Gallery Template: Super (Responsive Galleria Slideshow)
*/
?>


<?php
$output .="<script type=\"text/javascript\" src=\"";

$insurl = get_bloginfo('template_url');
$output .= $insurl;

$output .="/includes/gallery/js/galleria.solofolio.js\"></script>";

$output .="<div class=\"galleria-wrap\"><div class=\"galleria\" class=\"galleria-container notouch\">";

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
						<a class=\"prev\" href=\"#\">< prev</a>
						<div class=\"galleria-counter\">
							<span class=\"index\"></span> of 
							<span class=\"total\"></span>
						</div>
						<a class=\"next\" href=\"#\">next ></a>";
						if ($fullscreen != "false"){$output.= "<a class=\"fullscreen\" href=\"#\" title=\"Fullscreen\"></a>";}
						if ($showplay != "false"){$output.= "<a class=\"play\" href=\"#\" title=\"Slideshow\"></a>";}
						if ($showthumbnails != "false"){$output.= "<a class=\"toggle\" href=\"#\" title=\"Thumbnails\"></a>";}
					$output .= "</div>";
		$output .= "<div class=\"galleria-info\"></div>";
	$output .= "</div></div>";

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
				this.addElement('exit').appendChild('container','exit');
				var btn = this.$('exit').hide().text('Close').click(function(e) {
					gallery.exitFullscreen();
				});
				this.bind('fullscreen_enter', function() {
					btn.show();
				});
				this.bind('fullscreen_exit', function() {
					btn.hide();
				});
				$('.prev').click(function() {
					gallery.prev();
				});
				$('.next').click(function() {
					gallery.next();
				});
				$('.fullscreen').click(function() {
					gallery.toggleFullscreen();
				});
				$('.play').click(function() {
					gallery.playToggle();
					$('.play').toggleClass(\"playing\");
				});
				$('.toggle').click(function() {
					gallery.$('thumblink').click();
				});
				this.bind('image', function(e) {
					data = e.galleriaData;
					$('.galleria-info').html('<div class=\"galleria-info-description\">'+data.description+'</div>' );
				});
				this.bind('image', function(e) {
					data = e.index;
					$('.index').html(data + 1);
				});
				this.bind('image', function(e) {
					data = e.index;
					$('.index').html(data + 1);
				});
				$('.total').append(this.getDataLength());
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
