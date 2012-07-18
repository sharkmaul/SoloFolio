<?php
//allows the theme to get info from the theme options page
global $options;
foreach ($options as $value) {
	if (get_option( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; }
	else { $$value['id'] = get_option( $value['id'] ); }
	}
global $current_user; get_currentuserinfo(); 
if (get_option('sl_maintenance_mode') == 'true') {
	if ($current_user->user_level == 10 ) { 
	} else {
	die("Coming Soon.");
	}
}
?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>	
	
	<?php wp_head(); ?>
		
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/gallery/js/galleria-1.2.7.min.js"></script> 
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/gallery/js/galleria.history.min.js"></script> 
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/gallery/js/galleria.solofolio.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.imagefit.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.retina.min.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.jknav.min.js"></script>
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('url'); ?>/wp-rss.php" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php if (get_option('sl_favicon_url') != '') { ?>
	<link href="<?php echo get_option('sl_favicon_url'); ?>" rel="shortcut icon" />
	<?php } else { ?>
	<link href="<?php echo (bloginfo('template_url').'/img/favicon.ico'); ?>" rel="shortcut icon" />
	<?php } ?>
	
	<?php if (get_option('sl_ios_url') != '') { ?>
	<link href="" rel="shortcut icon" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_option('sl_ios_url'); ?>" />
	<?php } else { ?>
	<link rel="apple-touch-icon-precomposed" href="<?php echo (bloginfo('template_url').'/img/favicon.ico'); ?>" />
	<?php } ?>
	
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<link rel="stylesheet" href="<?php echo (bloginfo('template_url').'/styles.php'); ?>" type="text/css" media="screen" />
	
	<script type="text/javascript"> 
   $(window).load(function(){
			$('.entry').imagefit();
			$('img').retina();
			$('#wrapper img').jknav();
			$.jknav.init();
		 });
  </script>
  
  <script type="text/javascript">

</script>
  
  
	
	<?php if (get_option('sl_custom_css') != '') { ?><style type="text/css">
	<?php echo get_option('sl_custom_css'); ?>
	</style><?php } ?>
	<?php echo stripslashes(get_option('sl_custom_head')); ?>
	
</head>

<body id="<?php echo get_post_type( $post ); ?>"   class="<?php echo get_option('sl_body_font'); ?>">

<div id="outerWrap">

<div id="header" class="sans"><!-- Begin Header -->
	<div id="logo">
		<?php if (get_option('sl_logo') == '') { ?>
		<div id="headerimg">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
		</div>
		<?php } else { ?>
		<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_option('sl_logo'); ?>" alt="<?php bloginfo('description'); ?>" data-retina="<?php echo get_option('sl_logo_retina'); ?>"/></a>
		<?php } ?>   
	</div>
	<div id="header-right">
		<div id="header-phone" class="<?php echo get_option('sl_header_font'); ?> "><?php echo get_option('sl_phone'); ?></div>
		<div id="header-email" class="<?php echo get_option('sl_header_font'); ?> "><a href="mailto:<?php echo get_option('sl_email'); ?>"><?php echo get_option('sl_email'); ?></a></div>
		<div id="navigation" class="<?php echo get_option('sl_menu_font'); ?> ">
			<?php wp_nav_menu( array( 'menu_id' => 'suckerfishnav', 'menu_class' => 'sf-menu', 'container_class' => 'sf-menu', 'theme_location' => 'primary' ) ); ?>
		</div>
	</div>
	<?php if (get_option('sl_sidebar_layout') == 'yes') { ?>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("navigation-bar") ) : ?>
		<?php endif; ?>
	<?php } ?>
	
	<?php if (get_option('sl_sidebar_layout') == 'yes') { ?>
	<?php if (is_home()){ ?>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("blog-sidebar") ) : ?>
		<?php endif; ?>
	<?php } ?>
	
	<?php if (is_single()){ ?>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("blog-sidebar") ) : ?>
		<?php endif; ?>
	<?php } ?>
	
	<?php if (is_archive()){ ?>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("blog-sidebar") ) : ?>
		<?php endif; ?>
	<?php } ?>
	<?php } ?>
	
	<?php if (get_option('sl_sidebar_layout') == 'yes') { ?>
		<?php if (get_option('sl_show_footer_nav') == 'yes') {?>
			<div id="footer-nav" class="<?php echo get_option('sl_menu_font'); ?> ">
				<ul class="solo-nav">
				<?php wp_list_pages('title_li=&depth=1'); ?>
				</ul>
			</div>
		<?php }; ?>
		
		<?php if (get_option('sl_show_footer') == 'yes') {?>
			<p class="sidebar-footer"><?php echo get_option('sl_footer_text'); ?></p>
		<?php }; ?>

<?php }; ?>
	
</div><!-- End Header -->

<div id="wrapper"><!-- Begin Wrapper -->


