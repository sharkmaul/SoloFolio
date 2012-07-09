	<div class="clear"></div>
</div><!-- /#wrapper -->

<div id="footer" class="sans"><!-- Begin Footer -->

<?php if (get_option('sl_sidebar_layout') != 'yes') { ?>
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


<?php global $current_user; get_currentuserinfo(); if ($current_user->user_level == 10 ) { ?>
<?php } else {   ?>
<?php echo stripslashes(get_option('sl_tracking_code')); ?>
<?php } ?>

<?php
	wp_footer();
?>

</div><!-- /#outerwrap -->

<?php if (get_option('sl_show_att') == 'yes') {?>
<a id="solo-link" title="Powered by SoloFolio. Your blog and portfolio in one place, the way it should be." href="http://www.solofolio.net" target="_blank"><img src="<?php echo (bloginfo('template_url').'/img/solo-link.png'); ?>" alt="Powered by SoloFolio. Your blog and portfolio in one place, the way it should be." /></a>
<?php }; ?>


</body>
</html>
