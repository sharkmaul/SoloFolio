	<div class="clear"></div>
</div><!-- /#wrapper -->

</div><!-- /#outerwrap -->

<?php global $current_user; get_currentuserinfo(); if ($current_user->user_level == 10 ) { ?>
<?php } else {   ?>
<?php echo get_theme_mod( 'solofolio_tracking' ) ?>
<?php } ?>

<?php
	wp_footer();
?>

</body>
</html>
