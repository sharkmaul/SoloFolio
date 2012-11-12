	<div class="clear"></div>
</div><!-- /#wrapper -->

<?php if (get_option('sl_sidebar_layout') != 'yes') { ?>
<div id="footer" class="sans"><!-- Begin Footer -->

<?php if (get_option('sl_show_footer') == 'yes') {?>
	<p><?php echo get_option('sl_footer_text'); ?></p>
<?php }; ?>
</div><!-- End Footer -->
<?php }; ?>

</div><!-- /#outerwrap -->

<?php global $current_user; get_currentuserinfo(); if ($current_user->user_level == 10 ) { ?>
<?php } else {   ?>
<?php echo stripslashes(get_option('sl_tracking_code')); ?>
<?php } ?>

<?php
	wp_footer();
?>

</body>
</html>
