<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://chiedolabs.com
 * @since             1.0.0
 * @package           Laboratory_Menu_Api
 *
 * @wordpress-plugin
 * Plugin Name:       Laboratory Menu REST Endpoints
 * Plugin URI:        https://github.com/chiedolabs/laboratory-menu-api
 * Description:       Generate REST API Endpoints for WordPress Menus.
 * Version:           1.0.0
 * Author:            Ricardo Fearing
 * Author URI:        https://chiedolabs.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       laboratory-menu-api
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'LABORATORY_MENU_REST_ENDPOINTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-laboratory-menu-api-activator.php
 */
function activate_laboratory_menu_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-laboratory-menu-api-activator.php';
	Laboratory_Menu_Api_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-laboratory-menu-api-deactivator.php
 */
function deactivate_laboratory_menu_api() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-laboratory-menu-api-deactivator.php';
	Laboratory_Menu_Api_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_laboratory_menu_api' );
register_deactivation_hook( __FILE__, 'deactivate_laboratory_menu_api' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-laboratory-menu-api.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_laboratory_menu_api() {

	$plugin = new Laboratory_Menu_Api();
	$plugin->run();

}
run_laboratory_menu_api();
