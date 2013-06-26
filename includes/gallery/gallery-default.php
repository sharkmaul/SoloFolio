<?php
/* 
SoloFolio
Gallery Template: Default (Galleria Slideshow)
*/

$output .= "<script type=\"text/javascript\" src=\"" . get_template_directory_uri() . "/includes/gallery/js/galleria.solofolio.js\"></script>";
$output .= "<link rel=\"stylesheet\" href=\"" . get_template_directory_uri() . "/includes/gallery/js/galleria.solofolio.css\"/>"; 

$output .= "<div class=\"galleria-wrap\"><div class=\"galleria galleria-container notouch\">";
$i = 0;

foreach ( $attachments as $id => $attachment ) {

	$link2 = wp_get_attachment_url($id);
	$link3 = wp_get_attachment_image_src($id, 'thumbnail');
	$link4 = wp_get_attachment_image_src($id, 'large');
	
	
	$output .= "
		
		<a href=\"" . $link4[0] . "\" rel=\"" . $link2 . "\">
			<img  class=\"full\" alt=\"" .  wptexturize($attachment->post_excerpt) . "\" src=\"". $link3[0] . "\"/>			
		</a>";
	$i++;

}


	$output .= "</div>";
	
	$output .= "<div class=\"galleriabar\">";
		$output .= "<div class=\"galleria-controls\">";
						if ($shownav != "false"){$output.= "<a class=\"prev\" href=\"#\"> <i class=\"icon-angle-left\"></i> prev</a>";}
						if ($showcounter != "false"){$output.= "<div class=\"counter\">
							<span class=\"index\"></span> of 
							<span class=\"total\"></span>
						</div>";}
						if ($shownav != "false"){$output.= "<a class=\"next\" href=\"#\">next <i class=\"icon-angle-right\"></i></a>";}
						if ($fullscreen != "false"){$output.= "<a class=\"fullscreen\" href=\"#\" title=\"Fullscreen\"><i class=\"icon-fullscreen\"></i></a>";}
						if ($showplay != "false"){$output.= "<a class=\"play\" href=\"#\" title=\"Slideshow\"><i class=\"icon-play\"></i></a>";}
						if ($showthumbnails != "false"){$output.= "<a class=\"toggle\" href=\"#\" title=\"Thumbnails\"><i class=\"icon-th-large\"></i></a>";}
					$output .= "</div>";
					if ($captions != "false"){$output.= "<div class=\"galleria-info\"></div>";}
	$output .= "</div></div>";

add_action('wp_footer', 'solofolio_slideshow_footer');
 
function solofolio_slideshow_footer() {
    
    global $solofolio_autoplay;
    
    $output .= "<script type=\"text/javascript\">";
    $output .=" Galleria.run('.galleria', {";
   		if ($solofolio_autoplay == "true"){$output.= "autoplay: true,";}
		$output.="height: .667,";
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
