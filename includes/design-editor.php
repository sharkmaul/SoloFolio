<?php 
/* 
SoloFolio
Admin - Design options
*/

function solofolio_design_editor() {

?>


<div id="de-wrap">

<!--<?php
if ( $_REQUEST['saved'] ) echo '<div id="message"><p><strong>'.$themename.' Settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message"><p><strong>'.$themename.' Settings reset.</strong></p></div>';	

?>-->



<div id="de-options" class="left">

<?php global $themename, $shortname, $options_design; $i=0; ?>
	
<div class="wrap rm_wrap" name="top">
<form name="de" method="post">
	
	<div class="rm_options">

<?php 

solofolio_options($options_design);

?>

</div>	
	
<input type="hidden" name="action" value="save" />
</form>

</div>

<div class="clear"></div>

</div>



<?php

}

?>
