<?php
/* 
SoloFolio
Footer widget area
*/
?>

<div id="footer-widgets" class="sidebar">
	
	<div class="footer-column" id="footer-left">
		<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Bottom Left')) : ?><?php endif; ?>
	&nbsp;
	</div>
	
	<div class="footer-column" id="footer-middle-left">
		<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Bottom Center-Left')) : ?><?php endif; ?>
	&nbsp;
	</div>
	
	<div class="footer-column" id="footer-middle-right">
		<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Bottom Center-Right')) : ?><?php endif; ?>
	&nbsp;
	</div>
	
	<div class="footer-column" id="footer-right">
		<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar('Bottom Right')) : ?><?php endif; ?>
	&nbsp;
	</div>

	<div class="clear"></div>

</div>

<?php ?>