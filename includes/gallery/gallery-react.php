<?php
/* 
SoloFolio
Gallery Template: React (Picturefill hack)
*/

$id = intval($id);

if ( ! empty( $attr['ids'] ) ) {
        if ( empty( $attr['orderby'] ) )
            $attr['orderby'] = 'post__in';
        $attr['include'] = $attr['ids'];
    }

    $output = apply_filters('post_gallery', '', $attr);
    if ( $output != '' )
        return $output;

    if ( isset( $attr['orderby'] ) ) {
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( !$attr['orderby'] )
            unset( $attr['orderby'] );
    }

    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'itemtag'    => '',
        'icontag'    => 'li',
        'captiontag' => 'p',
        'columns'    => 0,
        'size'       => 'thumbnail',
        'include'    => '',
        'exclude'    => ''
    ), $attr));

    $id = intval($id);
    if ( 'RAND' == $order )
        $orderby = 'none';

    if ( !empty($include) ) {
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( !empty($exclude) ) {
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }

    if ( empty($attachments) )
        return '';

    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment )
            $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
        return $output;
    }

    $itemtag = tag_escape($itemtag);
    $captiontag = tag_escape($captiontag);


if ( !empty($include) ) {
	$include = preg_replace( '/[^0-9,]+/', '', $include );
	$_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

	$attachments = array();
	foreach ( $_attachments as $key => $val ) {
		$attachments[$val->ID] = $_attachments[$key];
	}
} else {
	$attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
}

if ( empty($attachments) )
	return '';
	
$i = 0;
	
foreach ( $attachments as $id => $attachment ) {
	
	$link2 = wp_get_attachment_url($id);
	$link3 = wp_get_attachment_image_src($id, 'thumbnail');
	$link4 = wp_get_attachment_image_src($id, 'large');
	$link5 = wp_get_attachment_image_src($id, 'xlarge');
	
	$helper = get_theme_mod( 'solofolio_header_width' ) + 900; // Sneaky Joel calculates the break point dynamically!
	
	$output .= "
		
		<div class=\"sl-react\" data-picture data-alt=\"" .  wptexturize($attachment->post_excerpt) . "\">
			<div data-src=\"" . $link4[0] . "\"></div>
			<div data-src=\"" . $link5[0] . "\"      data-media=\"(min-width: 800px) and (min-device-pixel-ratio: 2.0)\"></div> 
			<div data-src=\"" . $link5[0] . "\" data-media=\"(min-width: " . $helper . "px)\"></div>

			<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
			<noscript><img src=\"" . $link6[0] . "\" alt=\"" .  wptexturize($attachment->post_excerpt) . "\"></noscript>
		</div>
		
		<p class=\"solofolio-caption sl-react-caption\">" .  wptexturize($attachment->post_excerpt) . "</p>
		
		";
} // End ForEach


add_action('wp_footer', 'sl_react');
 
function sl_react() {
     
    // Output necessary JS. This can't be mobile friendly.
	$output .="<script type=\"text/javascript\" src=\"" . get_bloginfo('template_url') . "/includes/gallery/js/matchmedia.js\"></script>";

	$output .="<script type=\"text/javascript\" src=\"" . get_bloginfo('template_url') . "/includes/gallery/js/picturefill.js\"></script>";

	
	$output.="<script type=\"text/javascript\"> 
	$(window).load(function(){
		var setResponsive = function () {
		  var pageHeight = jQuery(window).height();
		  var blockHeight = $(\".sl-react-caption\").outerHeight();
		  $('.sl-react img').css('max-height', pageHeight - blockHeight - 70); 
		}
		$(window).resize(setResponsive);
		setResponsive();
	});

	</script>";



    echo $output;
 
}

?>
