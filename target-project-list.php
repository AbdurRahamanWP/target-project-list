<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.facebook.com/AbdurRahamanWP
 * @since             1.0.0
 * @package           Target_Project_List
 *
 * @wordpress-plugin
 * Plugin Name:       Target Project list
 * Plugin URI:        http://targetsoftbd.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Target Soft BD
 * Author URI:        https://www.facebook.com/AbdurRahamanWP
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       target-project-list
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
define( 'TARGET_PROJECT_LIST_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-target-project-list-activator.php
 */
function activate_target_project_list() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-target-project-list-activator.php';
	Target_Project_List_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-target-project-list-deactivator.php
 */
function deactivate_target_project_list() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-target-project-list-deactivator.php';
	Target_Project_List_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_target_project_list' );
register_deactivation_hook( __FILE__, 'deactivate_target_project_list' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-target-project-list.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_target_project_list() {

	$plugin = new Target_Project_List();
	$plugin->run();

}
run_target_project_list();
