<?php

add_filter('media_upload_gallery_form', 'solo_media_upload_gallery_form', 11);
 
function solo_media_upload_gallery_form($errors) {
	global $redir_tab, $type;

	$redir_tab = 'gallery';
	media_upload_header();

	$post_id = intval($_REQUEST['post_id']);
	$form_action_url = admin_url("media-upload.php?type=$type&tab=gallery&post_id=$post_id");
	$form_action_url = apply_filters('media_upload_form_url', $form_action_url, $type);
?>

<script type="text/javascript">
<!--
jQuery(function($){
	var preloaded = $(".media-item.preloaded");
	if ( preloaded.length > 0 ) {
		preloaded.each(function(){prepareMediaItem({id:this.id.replace(/[^0-9]/g, '')},'');});
		updateMediaForm();
	}
});
-->
</script>
<div id="sort-buttons" class="hide-if-no-js">
<span>
<?php _e('All Tabs:'); ?>
<a href="#" id="showall"><?php _e('Show'); ?></a>
<a href="#" id="hideall" style="display:none;"><?php _e('Hide'); ?></a>
</span>
<?php _e('Sort Order:'); ?>
<a href="#" id="asc"><?php _e('Ascending'); ?></a> |
<a href="#" id="desc"><?php _e('Descending'); ?></a> |
<a href="#" id="clear"><?php _ex('Clear', 'verb'); ?></a>
</div>
<form enctype="multipart/form-data" method="post" action="<?php echo esc_attr($form_action_url); ?>" class="media-upload-form validate" id="gallery-form">
<?php wp_nonce_field('media-form'); ?>
<?php //media_upload_form( $errors ); ?>
<table class="widefat" cellspacing="0">
<thead><tr>
<th><?php _e('Media'); ?></th>
<th class="order-head"><?php _e('Order'); ?></th>
<th class="actions-head"><?php _e('Actions'); ?></th>
</tr></thead>
</table>
<div id="media-items">
<?php add_filter('attachment_fields_to_edit', 'media_post_single_attachment_fields_to_edit', 10, 2); ?>
<?php echo get_media_items($post_id, $errors); ?>
</div>

<p class="ml-submit">
<input type="submit" class="button savebutton" style="display:none;" name="save" id="save-all" value="<?php esc_attr_e( 'Save all changes' ); ?>" />
<input type="hidden" name="post_id" id="post_id" value="<?php echo (int) $post_id; ?>" />
<input type="hidden" name="type" value="<?php echo esc_attr( $GLOBALS['type'] ); ?>" />
<input type="hidden" name="tab" value="<?php echo esc_attr( $GLOBALS['tab'] ); ?>" />
</p>

<div id="gallery-settings" style="display:none;">
<div class="title"><?php _e('SoloFolio Gallery Settings'); ?></div>
<table id="basic" class="describe"><tbody>
	<tr>
	<th scope="row" class="label">
		<label>
		<span class="alignleft"><?php _e('Link thumbnails to:'); ?></span>
		</label>
	</th>
	<td class="field">
		<input type="radio" name="linkto" id="linkto-file" value="file" />
		<label for="linkto-file" class="radio"><?php _e('Image File'); ?></label>

		<input type="radio" checked="checked" name="linkto" id="linkto-post" value="post" />
		<label for="linkto-post" class="radio"><?php _e('Attachment Page'); ?></label>
	</td>
	</tr>

	<tr>
	<th scope="row" class="label">
		<label>
		<span class="alignleft"><?php _e('Order images by:'); ?></span>
		</label>
	</th>
	<td class="field">
		<select id="orderby" name="orderby">
			<option value="menu_order" selected="selected"><?php _e('Menu order'); ?></option>
			<option value="title"><?php _e('Title'); ?></option>
			<option value="ID"><?php _e('Date/Time'); ?></option>
			<option value="rand"><?php _e('Random'); ?></option>
		</select>
	</td>
	</tr>

	<tr>
	<th scope="row" class="label">
		<label>
		<span class="alignleft"><?php _e('Order:'); ?></span>
		</label>
	</th>
	<td class="field">
		<input type="radio" checked="checked" name="order" id="order-asc" value="asc" />
		<label for="order-asc" class="radio"><?php _e('Ascending'); ?></label>

		<input type="radio" name="order" id="order-desc" value="desc" />
		<label for="order-desc" class="radio"><?php _e('Descending'); ?></label>
	</td>
	</tr>

	<tr>
	<th scope="row" class="label">
		<label>
		<span class="alignleft"><?php _e('SoloFolio Gallery columns:'); ?></span>
		</label>
	</th>
	<td class="field">
		<select id="columns" name="columns">
			<option value="2">2</option>
			<option value="3" selected="selected">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
		</select>
	</td>
	</tr>
</tbody></table>

<p class="ml-submit">
<input type="button" class="button" style="display:none;" onMouseDown="wpgallery.update();" name="insert-gallery" id="insert-gallery" value="<?php esc_attr_e( 'Insert gallery' ); ?>" />
<input type="button" class="button" style="display:none;" onMouseDown="wpgallery.update();" name="update-gallery" id="update-gallery" value="<?php esc_attr_e( 'Update gallery settings' ); ?>" />
</p>
</div>
</form>
<?php
}

?>
