<?php 

/* 
SoloFolio
Admin - Option element templates

Loads option arrays from options-arrays and builds the admin menus based on these templates.
*/

function solofolio_options($input) {

foreach ($input as $value) {

	switch ( $value['type'] ) { 
		case "open":
		break;
		
		case "close": ?>
			</div>
			<input class="button-primary right" name="save<?php echo $i; ?>" type="submit" value="Update" />
			<div class="clear"></div><?php 
		break;
		
		case "title":
		break;
		
		case 'open-sub': ?>
			<div class="options-sub">
			<div class="clear"></div>
			<div class="toggle_container">
			<?php
		break;
	
		case 'open-sub-left': ?>
			<div class="left"><?php
		break;
		
		case 'close-sub-left': ?>
			</div>
			<?php
		break;
	
	
		case 'close-sub': ?>
			</div>
			<div class="clear"></div>
			</div><?php
		break;
	 
		case 'text': ?>
			<div class="options-text">
				<!--<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>-->
				<?php if(isset($value['icon'])) { ?><img src="<?php bloginfo('template_directory'); ?>/functions/icons/<?php echo $value['icon']; ?>.png" alt="<?php echo $value['name']; ?>" id="<?php echo $value['name']; ?>"/><?php } ?>
				<span class="options-label"><?php echo $value['name']; ?></span><br/>
				<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
			 	<span class="suffix"><?php echo $value['suffix']; ?></span>
			 </div><?php
		break;
		
		case 'text-short': ?>
			<div class="options-text-short left">
				<span class="options-label"><?php echo $value['name']; ?></span><br />
				<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
			 	<span class="suffix"><?php echo $value['suffix']; ?></span>
			 </div><?php
		break;
		
		case 'color': ?>
			<div class="options-color left">
				<span class="options-label"><?php echo $value['name']; ?></span><br />
				<input onchange="document.getElementById('<?php echo $value['target']; ?>').style.<?php echo $value['attribute']; ?> = '#'+this.color" maxlength="6" size="6" class="color" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
			 </div><?php
		break;
	 
		case 'textarea': ?>
			<div class="options-textarea left">
				<?php if(isset($value['icon'])) { ?><img src="<?php bloginfo('template_directory'); ?>/functions/icons/<?php echo $value['icon']; ?>.png" alt="<?php echo $value['name']; ?>" id="<?php echo $value['name']; ?>"/><?php } ?>
				<span class="options-label"><?php echo $value['name']; ?></span><br/>
				<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
			 <div class="clear"></div>
			 </div><?php
		break;
	 
		case 'select': ?>
			<div class="options-select left">
				<span class="options-label"><?php echo $value['name']; ?></span>	<br />	
				<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
				<?php foreach ($value['options'] as $option) { ?>
						<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option>
				<?php } ?>
				</select>
			</div><?php
		break;
	 
		case "checkbox": ?>
			<div class="options-check">
				<span class="options-label"><?php echo $value['name']; ?></span>
				<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
				<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
				<?php if(get_option($value['id'])){ $bool = "true"; }else{ $bool = "false";} ?>
			</div><?php 
		break;
	
		case 'subsection': ?>			
			<?php
		break;
		
		case "section":
			$i++; ?>
			<h2><?php echo $value['name']; ?></h2>
			<div id="<?php echo $value['name']; ?>" class="options-section"><?php 
		break;
		
		case "clear": ?>
			<div class="clear"></div><?php 
		break;
	}
} // END foreach

} // END solofolio_options
