<?php
	/*
	Plugin Name: Redirect
	Plugin URI: #
	Description: menu redirect to sub page with custom field 'redirect'
	Author: Gorkii
	Version: 0.9
	Author URI: #	
	*/
	require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-config.php');
	add_action('get_header', 'redirect');
	function redirect () {
		global $post;
		if (is_page() || is_object($post)) {
			if (get_post_meta($post->ID, 'redirect', true)) {
				header('Location: ' . get_post_meta($post->ID, 'redirect', true));
			}
		}
	}
?>