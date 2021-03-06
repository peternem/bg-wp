<?php
/*
Plugin Name: Address Widget Plugin
Plugin URI: http://www.wpexplorer.com/
Description: Address Widget for. Includes: URL, Address area, Image and copy content management. Location of widget is at bottom of page just above global footer
Version: 1.0
Author: MattPeternell
Author URI: http://www.wmattpeternell.com.com/
License: GPL2
*/

class wp_my_plugin extends WP_Widget {
// Controller
	function wp_my_plugin() {
		$widget_ops = array('classname' => 'my_widget_class', 'description' => __('Address Widget. Location of widget is at bottom of page just above global footer.', 'wp_widget_plugin'));
		$control_ops = array('width' => 400, 'height' => 300);
		parent::WP_Widget(false, $name = __('Address Widget', 'wp_widget_plugin'), $widget_ops, $control_ops );
	}	
	
// constructor
    // function wp_my_plugin() {
        // parent::WP_Widget(false, $name = __('CTA Widget', 'wp_widget_plugin') );
    // }
	
	// widget form creation
	function form($instance) {
	
		// Check values
		if( $instance) {
		    $title = esc_attr($instance['title']);
			$imgUrl = esc_attr($instance['imgUrl']);
		    $subtitle = esc_attr($instance['subtitle']);
		    $textarea = esc_textarea($instance['textarea']);
			$textarea1 = esc_textarea($instance['textarea1']);
			$textarea2 = esc_textarea($instance['textarea2']);
			$linkUrl = esc_textarea($instance['linkUrl']);
		} else {
		     $title = '';
			 $imgUrl = '';
		     $subtitle = '';
		     $textarea = '';
			 $textarea1 = '';
			 $linkUrl = '';
		}
		?>
		<?php echo $_SERVER['REQUEST_URI'] ?>
		<p>
		<label for="<?php echo $this->get_field_id('imgUrl'); ?>"><?php _e('Image URL (http://www.site.com/images/....)', 'wp_widget_plugin'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('imgUrl'); ?>" name="<?php echo $this->get_field_name('imgUrl'); ?>" type="text" value="<?php echo $imgUrl; ?>" />
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'wp_widget_plugin'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('subtitle'); ?>"><?php _e('Address:', 'wp_widget_plugin'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('subtitle'); ?>" name="<?php echo $this->get_field_name('subtitle'); ?>" type="text" value="<?php echo $subtitle; ?>" />
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('textarea'); ?>"><?php _e('City/State/Zip Code:', 'wp_widget_plugin'); ?></label>
		<textarea class="widefat" id="<?php echo $this->get_field_id('textarea'); ?>" name="<?php echo $this->get_field_name('textarea'); ?>"><?php echo $textarea; ?></textarea>
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('textarea1'); ?>"><?php _e('Phone:', 'wp_widget_plugin'); ?></label>
		<textarea class="widefat" id="<?php echo $this->get_field_id('textarea1'); ?>" name="<?php echo $this->get_field_name('textarea1'); ?>"><?php echo $textarea1; ?></textarea>
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('textarea2'); ?>"><?php _e('Fax:', 'wp_widget_plugin'); ?></label>
		<textarea class="widefat" id="<?php echo $this->get_field_id('textarea2'); ?>" name="<?php echo $this->get_field_name('textarea2'); ?>"><?php echo $textarea2; ?></textarea>
		</p>
		
		<p>
		<label for="<?php echo $this->get_field_id('linkUrl'); ?>"><?php _e('Link Url:', 'wp_widget_plugin'); ?></label>
		<textarea class="widefat" id="<?php echo $this->get_field_id('linkUrl'); ?>" name="<?php echo $this->get_field_name('linkUrl'); ?>"><?php echo $linkUrl; ?></textarea>
		</p>
	<?php
	}
	// update widget
	function update($new_instance, $old_instance) {
	      $instance = $old_instance;
	      // Fields
	      $instance['title'] = strip_tags($new_instance['title']);
		  $instance['imgUrl'] = strip_tags($new_instance['imgUrl']);
	      $instance['subtitle'] = strip_tags($new_instance['subtitle']);
	      $instance['textarea'] = strip_tags($new_instance['textarea']);
		  $instance['textarea1'] = strip_tags($new_instance['textarea1']);
		  $instance['textarea2'] = strip_tags($new_instance['textarea2']);
		  $instance['linkUrl'] = strip_tags($new_instance['linkUrl']);
	     return $instance;
	}

	// display widget
	function widget($args, $instance) {
	   extract( $args );
	   // these are the widget options
	   $title = apply_filters('widget_title', $instance['title']);
	   $imgUrl = $instance['imgUrl'];
	   $subtitle = $instance['subtitle'];
	   $textarea = $instance['textarea'];
	   $textarea1 = $instance['textarea1'];
	   $textarea2 = $instance['textarea2'];
	   $linkUrl = $instance['linkUrl'];
	   echo $before_widget;
	   // Display the widget
	   echo '<div class="widget-text wp_widget_plugin_box">';

	   // Check if image URL is set
	   if ( $imgUrl ) {
	      echo '<img src="'.$imgUrl.'" class="img-thumbnail" />';
	   }
		
		// Check if Widget title is set
	   if ( $title ) {
	      echo "<header>\n";
	      echo $before_title . $title . $after_title;
		  echo "</header>\n";
	   }
	   
	   // Check if Sub-title is set
	   if( $subtitle ) {
	      echo '<p class="wp_widget_plugin_text">'.$subtitle.'</p>';
	   }
	   // Check if textarea is set
	   if( $textarea ) {
	     echo '<p class="wp_widget_plugin_textarea">'.$textarea.'</p>';
	   }
	   // Check if textarea is set
	   if( $textarea1 ) {
	     echo '<p class="wp_widget_plugin_textarea">'.$textarea1.'</p>';
	   }
	   // Check if textarea is set
	   if( $textarea2 ) {
	     echo '<p class="wp_widget_plugin_textarea">'.$textarea2.'</p>';
	   }
	
		// Check if Link URL  is set
	   if( $linkUrl ) {
	    // echo '<p class="wp_widget_plugin_textarea">'.$textarea.'</p>';
	   		echo "<footer>\n";
		 	echo '<a class="btn btn-primary btn-xs" href="'.$linkUrl.'" role="button">Visit Page »</a>';
			echo "</footer>\n";
	   }
	   echo '</div>';
	   echo $after_widget;
	}
}

// register widget
add_action('widgets_init', create_function('', 'return register_widget("wp_my_plugin");'));
?>
