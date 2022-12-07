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

class ToursImporter {

	public function __construct() {
		register_activation_hook(__FILE__, 'create_tours_table');
		add_action('admin_notices', $this->create_tours_table());
	}

	public function create_tours_table() {
		echo '<div class="notice notice-warning is-dismissible">
             <p>This is an example of a notice that appears on the settings page.</p>
         </div>';
	}


}
function tours_importer_plugin() {
	new ToursImporter();
}

tours_importer_plugin();
