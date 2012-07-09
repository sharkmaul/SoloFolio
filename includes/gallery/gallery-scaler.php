<?php
$output .= "<script type=\"text/javascript\">
$(window).load(function(){
	$('.sl-scaler-wrap').imagefit();
});
</script>
";

$i = 0;
	
foreach ( $attachments as $id => $attachment ) {
	$link = isset($attr['link']) && 'file' == $attr['link'] ? wp_get_attachment_link($id, $size, false, false) : wp_get_attachment_link($id, $size, true, false);
	
	$link2 = wp_get_attachment_url($id);
	$link3 = wp_get_attachment_image_src($id, 'thumbnail');
	$link4 = wp_get_attachment_image_src($id, 'large');

	$output .= "\n\n<div class=\"sl-scaler-wrap\">";
	
	$output .= "
		
		<img src=\"" . $link2 . "\" alt=\"open image\" class=\"full\"/>";
		
	if ($captions != "false"){		
		$output .="<p>" .  wptexturize($attachment->post_content) . "</p> ";
	}
	
	$output .= "</div>";
	
	$i += 1;
	
} // end foreach		
?>
