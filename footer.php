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

<?php global $current_user; get_currentuserinfo(); if ($current_user->user_level == 10 ) { ?>
<?php } else {   ?>
<?php echo stripslashes(get_option('sl_tracking_code')); ?>
<?php } ?>

<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.pageslide.min.js"></script>
<script>
	$('.open').pageslide({
		speed: 0,
		iframe: false
	});
</script>

</body>
</html>
