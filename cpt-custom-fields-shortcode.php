<?php
/*
Plugin Name: CPT Custom fields shortcode
Description: Use custom fields as shortcode in post content
Plugin URI:  http://syedalinaqihasni.com/wordpress-plugins/custom-fields-shortcode/
Version:     0.1
Author:      Syed Ali Naqi Hasni
Author URI:  http://syedalinaqihasni.com
*/

/*

USAGE:
use [field] shortcode in your post content to show the custom field value without edit your theme files.

EXAMPLE:
[field]fields-name[/field]
returns value of 'fields-name' custom-filed.

*/
function custom_fields_shortcode($atts, $text) {
	global $post;
	return get_post_meta($post->ID, $text, true);
}

@add_shortcode('field','custom_fields_shortcode');
?>