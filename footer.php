	<div class="clear"></div>
</div><!-- /#wrapper -->

<?php if (get_option('sl_sidebar_layout') != 'yes') { ?>
<div id="footer" class="sans"><!-- Begin Footer -->

<?php if (get_option('sl_show_footer_nav') == 'yes') {?>
	<div id="footer-nav" class="<?php echo get_option('sl_menu_font'); ?> ">
		<ul class="solo-nav">
		<?php wp_list_pages('title_li=&depth=1'); ?>
		</ul>
	</div>
<?php }; ?>
<?php if (get_option('sl_show_footer') == 'yes') {?>
	<p><?php echo get_option('sl_footer_text'); ?></p>
<?php }; ?>
</div><!-- End Footer -->
<?php }; ?>


<?php
	wp_footer();
?>

</div><!-- /#outerwrap -->

<?php if (get_option('sl_sidebar_layout') == 'yes') { ?>
	<div id="sidebar-footer">
		<div id="info-footer">
		<?php if (get_option('sl_show_footer') == 'yes') {?>
			<p><?php echo get_option('sl_footer_text'); ?></p>
		<?php }; ?>
		</div>
		<div id="attr-footer">
		<?php if (get_option('sl_show_att') == 'yes') {?>
			<p>Powered by <a id="solo-link" title="Powered by SoloFolio. The ultimate WordPress portfolio and blog." href="http://www.solofolio.net" target="_blank">SoloFolio</a>.</p>
		<?php }; ?>
	</div>
	
	</div>
	
<?php }; ?>

<?php global $current_user; get_currentuserinfo(); if ($current_user->user_level == 10 ) { ?>
<?php } else {   ?>
<?php echo stripslashes(get_option('sl_tracking_code')); ?>
<?php } ?>

</body>
</html>
