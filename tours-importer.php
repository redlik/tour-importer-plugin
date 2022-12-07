<?php

/*
Plugin Name: Tours Importer
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: rafal
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action('admin_notices', 'create_tours_table' );
add_action('admin_menu', 'create_admin_menu' );

function create_tours_table() {
	global $pagenow;
	if ( is_admin() && $pagenow == 'plugins.php' ) {
		echo '<div class="notice notice-warning is-dismissible">
             <p>This is an example of a notice that appears on the settings page.</p>
         </div>';
	};
}

function create_admin_menu() {
	add_management_page( 'Tours Importer', 'Importer', 'manage_options', 'importer', 'generate_page_content' );
}

function generate_page_content() {
	require_once( plugin_dir_path( __FILE__ ) . 'admin/admin-page.php' );
}
