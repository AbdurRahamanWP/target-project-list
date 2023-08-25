<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://www.facebook.com/AbdurRahamanWP
 * @since      1.0.0
 *
 * @package    Target_Project_List
 * @subpackage Target_Project_List/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Target_Project_List
 * @subpackage Target_Project_List/includes
 * @author     Target Soft BD <webrahaman@gmail.com>
 */
class Target_Project_List_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

		global $wpdb;
		$wpdb->query("DROP TABLE IF EXISTS target_project_info");

	}

}
