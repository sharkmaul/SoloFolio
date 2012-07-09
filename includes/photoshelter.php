<?php 
/* SoloFolio PhotoShelter integration */	
function solofolio_photoshelter() {
?>

<div id="solo-photoshelter"><!-- Begin Wrapper -->

<div class="left">

<h2>Public Page Master Template</h2>

<h3>Header HTML</h3>

<textarea>
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" href="<?php echo (bloginfo('template_url').'/styles.php'); ?>" type="text/css" media="screen" />
	<?php if (get_option('sl_sidebar_layout') == 'yes') { ?>
	<link rel="stylesheet" href="<?php echo (bloginfo('template_url').'/styles/sidebar.css'); ?>" type="text/css" media="screen" />
	<?php } ?>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		
	<?php if (get_option('sl_custom_css') != '') { ?><style type="text/css">
	<?php echo get_option('sl_custom_css'); ?>
	</style><?php } ?>
	<?php echo stripslashes(get_option('sl_custom_head')); ?>
	
	
	<div id="header" class="sans"><!-- Begin Header -->
		<div id="header-left">
			<?php if (get_option('sl_logo') == '') { ?>
			<div id="headerimg">
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<div class="description"><?php bloginfo('description'); ?></div>
			</div>
			<?php } else { ?>
			<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_option('sl_logo'); ?>" alt="<?php bloginfo('description'); ?>"/></a>
			<?php } ?>   
		</div>
		<div id="header-right">
			<div id="header-phone" class="<?php echo get_option('sl_header_font'); ?> "><?php echo get_option('sl_phone'); ?></div>
			<div id="header-email" class="<?php echo get_option('sl_header_font'); ?> "><a href="mailto:<?php echo get_option('sl_email'); ?>"><?php echo get_option('sl_email'); ?></a></div>
			<div id="navigation" role="navigation" class="<?php echo get_option('sl_menu_font'); ?> ">
				<?php wp_nav_menu( array( 'menu_id' => 'suckerfishnav', 'menu_class' => 'sf-menu', 'container_class' => 'sf-menu', 'theme_location' => 'primary' ) ); ?>
			</div>
			<?php if (get_option('sl_sidebar_layout') == 'yes') { ?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("navigation-bar") ) : ?>
				<?php endif; ?>
			<?php } ?>
		</div>
		<div class="clear"></div>
	</div><!-- End Header -->
	<div id="wrapper"><!-- Begin Wrapper -->
	
	<div id="psContainer">
	<div id="psContent">
	
	<div class="clear"></div>
</textarea>

<h3>Footer HTML</h3>

<textarea>
	<div class="clear"></div>
	</div>
	</div>
	
	<?php get_footer(); ?>		
</textarea>
	
</div>
	
<div class="left">

<h2>Customer Page Master Template</h2>

<h3>Header HTML</h3>
	
<textarea>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" href="<?php echo (bloginfo('template_url').'/styles.php'); ?>" type="text/css" media="screen" />
	<?php if (get_option('sl_sidebar_layout') == 'yes') { ?>
	<link rel="stylesheet" href="<?php echo (bloginfo('template_url').'/styles/sidebar.css'); ?>" type="text/css" media="screen" />
	<?php } ?>
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		
	<?php if (get_option('sl_custom_css') != '') { ?><style type="text/css">
	<?php echo get_option('sl_custom_css'); ?>
	</style><?php } ?>
	<?php echo stripslashes(get_option('sl_custom_head')); ?>
	
	
	<div id="header" class="sans"><!-- Begin Header -->
		<div id="header-left">
			<?php if (get_option('sl_logo') == '') { ?>
			<div id="headerimg">
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<div class="description"><?php bloginfo('description'); ?></div>
			</div>
			<?php } else { ?>
			<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_option('sl_logo'); ?>" alt="<?php bloginfo('description'); ?>"/></a>
			<?php } ?>   
		</div>
		<div id="header-right">
			<div id="header-phone" class="<?php echo get_option('sl_header_font'); ?> "><?php echo get_option('sl_phone'); ?></div>
			<div id="header-email" class="<?php echo get_option('sl_header_font'); ?> "><a href="mailto:<?php echo get_option('sl_email'); ?>"><?php echo get_option('sl_email'); ?></a></div>
			<div id="navigation" role="navigation" class="<?php echo get_option('sl_menu_font'); ?> ">
				<?php wp_nav_menu( array( 'menu_id' => 'suckerfishnav', 'menu_class' => 'sf-menu', 'container_class' => 'sf-menu', 'theme_location' => 'primary' ) ); ?>
			</div>
			<?php if (get_option('sl_sidebar_layout') == 'yes') { ?>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("navigation-bar") ) : ?>
				<?php endif; ?>
			<?php } ?>
		</div>
		<div class="clear"></div>
	</div><!-- End Header -->
	<div id="wrapper"><!-- Begin Wrapper -->
	<div id="psContainer">
	<div id="psContent">
	
	<div class="clear"><img src="/img/custom/1.0/themes/Gpp/pixel.gif" width="1" height="1"></div>
	
	<div id="subnav">
	<a href="[[my_account_url]]">My Account</a> | 
	<a href="[[my_gallery_invitations_url]]">My Gallery Invitations</a> | 
	<a href="[[my_purchases_url]]">My Purchases</a> | 
	<a href="[[my_downloads_url]]">My Downloads</a> | 
	[[logout_link]]
	</div>

</textarea>

</div>

<div class="clear"></div>

<?php } ?>
