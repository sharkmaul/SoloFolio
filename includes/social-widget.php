<?php

class pippin_simple_authors_widget extends WP_Widget {
 
    /** constructor */
    function pippin_simple_authors_widget() {
        parent::WP_Widget(false, $name = 'Solofolio Social Media');
    }
 
    /** @see WP_Widget::widget */
    function widget($args, $instance) {
        extract( $args );
        global $wpdb;
 
 		$facebook = apply_filters('widget_title', $instance['facebook']);
        $twitter = apply_filters('widget_title', $instance['twitter']);
        $vimeo = apply_filters('widget_title', $instance['vimeo']);
        $linkedin = apply_filters('widget_title', $instance['linkedin']);
        $rss = apply_filters('widget_title', $instance['rss']);
 
        if(!$size)
            $size = 40;
 
        ?>
              <?php echo $before_widget; 
              		echo "<ul id=\"solofolio-social\">";   
                        if ($twitter !="") {echo "<li><a target=\"_blank\" id=\"solofolio-twitter\" href=\"" . $twitter . "\"><i class=\"icon-twitter\"></i></a></li>";}
                        if ($facebook !="") {echo "<li><a target=\"_blank\" id=\"solofolio-facebook\" href=\"" . $facebook . "\"><i class=\"icon-facebook\"></i></a></li>";}
                        if ($vimeo !="") {echo "<li><a target=\"_blank\" id=\"solofolio-vimeo\" href=\"" . $vimeo . "\"><i class=\"icon-vimeo\"></i></a></li>";}
                        if ($linkedin !="") {echo "<li><a target=\"_blank\" id=\"solofolio-linkedin\" href=\"" . $linkedin . "\"><i class=\"icon-linkedin\"></i></a></li>";}
                        if ($rss !="") {echo "<li><a target=\"_blank\" id=\"solofolio-rss\" href=\"" . $rss . "\"><i class=\"icon-rss\"></i></a></li>";}
                	echo "</ul>";
                	echo "<div class=\"clear\"></div>";
        		echo $after_widget; ?>
        <?php
    }
 
    /** @see WP_Widget::update */
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['twitter'] = strip_tags($new_instance['twitter']);
        $instance['facebook'] = strip_tags($new_instance['facebook']);
        $instance['vimeo'] = strip_tags($new_instance['vimeo']);
        $instance['linkedin'] = strip_tags($new_instance['linkedin']);
        $instance['rss'] = strip_tags($new_instance['rss']);

        return $instance;
    }
    

 
    /** @see WP_Widget::form */
    function form($instance) {  
 
        $twitter = esc_attr($instance['twitter']);
        $facebook = esc_attr($instance['facebook']);
        $vimeo = esc_attr($instance['vimeo']);
        $linkedin = esc_attr($instance['linkedin']);
        $rss = esc_attr($instance['rss']);
        
 
        ?>
         <p>
        	<label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>" />
        </p>
        <p>
        	<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" />
        </p>
         <p>
        	<label for="<?php echo $this->get_field_id('vimeo'); ?>"><?php _e('Vimeo:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('Vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" type="text" value="<?php echo $vimeo; ?>" />
        </p>
        <p>
        	<label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('LinkedIn:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo $linkedin; ?>" />
        </p>
        <p>
        	<label for="<?php echo $this->get_field_id('rss'); ?>"><?php _e('RSS:'); ?></label>
          <input class="widefat" id="<?php echo $this->get_field_id('rss'); ?>" name="<?php echo $this->get_field_name('rss'); ?>" type="text" value="<?php echo $rss; ?>" />
        </p>
 
 
        <?php
    }
 
} // class utopian_recent_posts
add_action('widgets_init', create_function('', 'return register_widget("pippin_simple_authors_widget");'));