<?php
/* 
SoloFolio
Header
*/
?>	

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>			
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/gallery/js/galleria-1.2.7.min.js"></script> 
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/includes/gallery/js/galleria.history.min.js"></script> 
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.retina.min.js"></script>
	<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.jknav.min.js"></script>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" href="<?php echo (bloginfo('template_url').'/styles.php'); ?>" type="text/css" media="screen" />
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo (bloginfo('template_url').'/fonts/font-awesome.min.css'); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo (bloginfo('template_url').'/fonts/font-awesome-social.css'); ?>" />
	
	<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo (bloginfo('template_url').'/onts/font-awesome-ie7.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo (bloginfo('template_url').'/onts/font-awesome-more-ie7.min.css'); ?>">
	<![endif]-->
	
	<script type="text/javascript"> 
	$(window).load(function(){
		$('img').retina();
		$('#wrapper img').jknav();
		$.jknav.init();
		$("p:has(img)").css('margin' , '0');
		$("p:has(img)").css('padding' , '0');
    	/* Fallback support for older images that were not uploaded with the SoloFolio format filter */
    	if($(this).attr('width')){
			$('img').each(function() {
				var mwidth = $(this).attr('width');
				$(this).attr('style', 'max-width:' + mwidth + 'px');
			});
		} else {}

		$('img').each(function(){ 
        	$(this).removeAttr('width')
        	$(this).removeAttr('height');
    	});
    	$('#menu-icon').click(function(){
		$("#header-content").slideToggle();
			$(this).toggleClass("active");
		});
		
		var setResponsive = function () {
		  // Is the window taller than the #adminmenuwrap by 50px or more?
		  if ($(window).height() > $("#header-content").height() + $("#logo").height() + 100) {
			 // ...if so, make the #adminmenuwrap fixed
			$('#header').css('position', 'relative');
		  } else {
			 //...otherwise, leave it relative        
			 $('#header').css('position', 'relative');
			 $('#sidebar-footer').css('position', 'static'); 
		  }
		}
		$(window).resize(setResponsive);
		setResponsive();
	});

	</script>
	
<?php if (get_theme_mod( 'solofolio_css' ) != '') { ?>
	<style type="text/css">
	<?php echo get_theme_mod( 'solofolio_css' ) ?>
	</style><?php } ?>
	
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>

<body id="<?php echo get_post_type( $post ); ?>"   class="<?php echo get_option('sl_body_font'); ?>">

<div id="outerWrap">

<div id="header" class="sans"><!-- Begin Header -->
	<a id='menu-icon'><i class="icon-reorder"></i></a>
	
	<div id="logo">
	
			
			<div id="logo-img">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'solofolio_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" data-retina="<?php echo get_theme_mod( 'solofolio_logo_retina' ); ?>" /></a>
			</div>
			
			<div id="logo-noimg">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
		
		<div id="header-phone"><a href="tel:<?php echo get_theme_mod( 'solofolio_phone' ); ?>"><?php echo get_theme_mod( 'solofolio_phone', '555-555-5555' ); ?></a></div>
		<div id="header-email"><a href="mailto:<?php echo get_theme_mod( 'solofolio_email' ); ?>"><?php echo get_theme_mod( 'solofolio_email', 'john@johndoe.com' ); ?></a></div>  
		
	</div>
	<div id="header-content">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Layout - Main Navigation") ) : ?>
			Your site does not have any menus! Add one using the Custom Menu widget in Appearance > Widgets.
			
			<?php endif; ?>
		<?php if (is_home()){ ?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Layout - Under Nav on Blog") ) : ?>
			<?php endif; ?>
		<?php } ?>
		
		<?php if (is_single()){ ?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Layout - Under Nav on Blog") ) : ?>
			<?php endif; ?>
		<?php } ?>
		
		<?php if (is_archive()){ ?>
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar Layout - Under Nav on Blog") ) : ?>
			<?php endif; ?>
		<?php } ?>
		
	</div><!-- /#header-content -->
	
</div><!-- /#header -->

<div id="sidebar-footer">
	<p id="info-footer"><?php echo get_theme_mod( 'solofolio_footer_text' ); ?></p>
	<p id="attr-footer"><a title="Powered by SoloFolio. The ultimate WordPress portfolio and blog." href="http://www.solofolio.net" target="_blank">SoloFolio</a> / <a href="http://www.wordpress.org/">Wordpress</a></p>
</div>

<div id="wrapper"><!-- Begin Wrapper -->
