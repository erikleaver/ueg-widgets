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
		
		function ueg_widget_act_now() {
		
		}
		
		function widget($args, $instance) {
		
		}
		
		function update($new_isntance, $old_instance) {
		
		}
		
		function form($instance) {
		
		}
	}
}

register_widget('ueg_widget_act_now');

?>