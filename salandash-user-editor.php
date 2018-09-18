<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the
 * plugin admin area. This file also defines a function that starts the plugin.
 *
 * @since             1.0.0
 * @package           Salandash-user-editor
 *
 * @wordpress-plugin
 * Plugin Name:       User Editor
 * Description:       Edit and deactivate user accounts.
 * Version:           1.0.0
 * Author:            William Herman
 * License:           MIT
 * License URI:       https://choosealicense.com/licenses/mit/#
 */
 
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
     die;
}

// Include the dependencies needed to instantiate the plugin.
foreach ( glob( plugin_dir_path( __FILE__ ) . 'admin/*.php' ) as $file ) {
    include_once $file;
}
 
add_action( 'plugins_loaded', 'salandash_user_editor' );
/**
 * Starts the plugin.
 *
 * @since 1.0.0
 */
function salandash_user_editor() {
	$serializer = new Serializer();
	$serializer->init();

	$plugin = new Submenu( new Submenu_Page( $serializer ) );
    $plugin->init();
}