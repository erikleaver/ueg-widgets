<?php

/*
	Plugin Name: United to End Genocide - Widgets
	Plugin URI: http://endgenocide.org/code
	Description: Widgets built specifically for United to End Genocide.
	Version: 0.1
	Author: Kelly Mears
	Author URI: http://kellymears.me
	License: GPL2
*/

/*	
	Copyright 2012 United To End Genocide (email : info@endgenocide.org)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if (!class_exists("ueg_widget_act_now")) {

	class ueg_widget_act_now extends WP_Widget {
		
		function __construct() {
			parent::__construct(
						'ueg_widget_act_now', // Base ID
						'UEG', // Name
						array('description' => __('Act Now Widget', 'ueg_widgets'))
						);
		}
		
		function widget($args, $instance) {
			extract($args);
			echo $before_widget;
				echo $before_title;
					echo $instance['title'];
				echo $after_title;
				echo '<h3>'. $instance['secondary_title'] .'</h3><br /><br />';
				echo '<p>'. $instance['body'] .'</p>';
				echo '<p><a href="'. $instance['action_url'] .'">'. $instance['call_to_action'] .' &rarr;</a></p>';
			echo $after_widget;
		}
		
		function update($new_instance, $old_instance) {
			return $new_instance;
		}
		
		function form($instance) {
			$title = esc_attr($instance['title']);
			$secondary_title = esc_attr($instance['secondary_title']);
			$body = esc_attr($instance['body']);
			$img = esc_attr($instance['img']);
			$call_to_action = esc_attr($instance['call_to_action']);
			$action_url = esc_attr($instance['action_url']);
			?> 
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>">Title: 
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
						name="<?php echo $this->get_field_name('title'); ?>" 
						type="text" value="<?php echo $title; ?>" />
				</label>
				<label for="<?php echo $this->get_field_id('secondary_title'); ?>">Secondary Title:
				<input class="widefat" id="<?php echo $this->get_field_id('secondary_title'); ?>"
						name="<?php echo $this->get_field_name('secondary_title'); ?>"
						type="text" value="<?php echo $secondary_title; ?>" />
				</label>
				<label for="<?php echo $this->get_field_id('body'); ?>">Body:
				<input class="widefat" id="<?php echo $this->get_field_id('body'); ?>"
						name="<?php echo $this->get_field_name('body'); ?>"
						type="text" value="<?php echo $body; ?>" />
				</label>
				<label for="<?php echo $this->get_field_id('img'); ?>">Image URL:
				<input class="widefat" id="<?php echo $this->get_field_id('img'); ?>"
						name="<?php echo $this->get_field_name('img'); ?>"
						type="text" value="<?php echo $img; ?>" />
				</label>	
				<label for="<?php echo $this->get_field_id('call_to_action'); ?>">Call To Action:
				<input class="widefat" id="<?php echo $this->get_field_id('call_to_action'); ?>"
						name="<?php echo $this->get_field_name('call_to_action'); ?>"
						type="text" value="<?php echo $call_to_action; ?>" />
				</label>	
				<label for="<?php echo $this->get_field_id('action_url'); ?>">Call To Action URL:
				<input class="widefat" id="<?php echo $this->get_field_id('action_url'); ?>"
						name="<?php echo $this->get_field_name('action_url'); ?>"
						type="text" value="<?php echo $action_url; ?>" />
				</label>	
			</p> <?php
		}
	}
}

function load_widgets() {
	register_widget('ueg_widget_act_now');	
}

add_action('widgets_init','load_widgets');

?>