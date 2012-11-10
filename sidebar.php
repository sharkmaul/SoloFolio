<?php

/* 
SoloFolio
Theme - Sidebar
*/

?>

<div id="sidebar" class="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>
	<?php endif; ?>
</div> 