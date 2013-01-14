<?php

class solofolio_cyclereact_captions extends WP_Widget {
 
    /** constructor */
    function solofolio_cyclereact_captions() {
        parent::WP_Widget(false, $name = 'Solofolio CycleReact Captions');
    }
 
    /** @see WP_Widget::widget */
    function widget($args, $instance) {
        extract( $args );
        global $wpdb;
 
        if(!$size)
            $size = 40;
 
        ?>
              <?php echo $before_widget; 
              	echo "<p class=\"solofolio-cyclereact-caption\"></p>";
        		echo $after_widget; ?>
        <?php
    }
 
} // class utopian_recent_posts

add_action('widgets_init', create_function('', 'return register_widget("solofolio_cyclereact_captions");'));