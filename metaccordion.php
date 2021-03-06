<?php
/*
Plugin Name: Metaccordion
Description: Combine all post editor sidebar meta-boxes into one accordion sidebar.
Version: 0.1
Author: Chatman Design
Author URI: http://chatmandesign.com
*/
/**
 * Metaccordion
 * Combine all post editor sidebar meta-boxes into one accordion sidebar. A WordPress plugin.
 *
 * @package   metaccordion
 * @since     0.1
 * @author    Chatman Design / Corey Caswick
 * @link      http://chatmandesign.com
 *
 * @wordpress-plugin
 */

// Works great down to 1280px wide
//
// TODO: Add media queries to account for smaller sizes (and mobile top bar height)
//
// Consider enhancements:
// – Add "go to" quick nav list of all the normal meta-boxes (each has unique ID, so jumping to each is easy)
// – Adjustment panel width and/or collapse

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) die;

// Enqueue custom CSS & JS
function metaccordion_enqueue($hook) {
	$show_on_pages = array('post.php', 'post-new.php', 'comment.php');

	if ( in_array($hook, $show_on_pages) ) {
		wp_enqueue_style( 'metaccordion-css', plugin_dir_url( __FILE__ ) . 'metaccordion.css' );
		wp_enqueue_script( 'metaccordion-js', plugin_dir_url( __FILE__ ) . 'metaccordion.js' );
	}
}
add_action( 'admin_enqueue_scripts', 'metaccordion_enqueue' );
