<?php 
function solofolio_gallery_settings() {

?>

<div id="solo-admin-gallery-wrap">

<div id="solo-admin-gallery-options" class="left">


<?php

global $themename, $shortname, $options_gallery;

$i=0;
 /*
if ( $_REQUEST['saved'] ) echo '<div id="message"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message"><p><strong>'.$themename.' settings reset.</strong></p></div>';	
*/
?>

<script>
jQuery(document).ready(function($) {    
	$(function() {
	$("#tabs").tabs({
		cookie: {
			// store cookie for a day, without, it would be a session cookie
			expires: 1
		}
	});
});
});

</script>
	
<div class="wrap rm_wrap" name="top">
	<form method="post">
	
		<div class="rm_options">
			<?php solofolio_options($options_gallery); ?>
		</div>	
	
		<input type="hidden" name="action" value="save" />
	</form>

	<div class="clear"></div>

</div>

<?php } ?>
