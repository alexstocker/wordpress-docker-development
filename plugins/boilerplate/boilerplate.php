<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://boilerplate.local
 * @since             1.0.0
 * @package           Boilerplate
 *
 * @wordpress-plugin
 * Plugin Name:       Boilerplate Plugin
 * Plugin URI:        https://boilerplate.local
 * Description:       Boilerplate Description
 * Version:           1.0.0
 * Author:            Boiler Plate
 * Author URI:        https://boilerplate.local/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       boilerplate
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
define( 'BOILERPLATE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-boilerplate-activator.php
 */
function activate_boilerplate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-boilerplate-activator.php';
	Boilerplate_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-boilerplate-deactivator.php
 */
function deactivate_boilerplate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-boilerplate-deactivator.php';
	Boilerplate_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_boilerplate' );
register_deactivation_hook( __FILE__, 'deactivate_boilerplate' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-boilerplate.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_boilerplate() {

	$plugin = new Boilerplate();
	$plugin->run();

}
run_boilerplate();
