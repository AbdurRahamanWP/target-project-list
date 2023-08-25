<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.facebook.com/AbdurRahamanWP
 * @since      1.0.0
 *
 * @package    Target_Project_List
 * @subpackage Target_Project_List/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Target_Project_List
 * @subpackage Target_Project_List/includes
 * @author     Target Soft BD <webrahaman@gmail.com>
 */
class Target_Project_List_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		$tableQuery = "CREATE TABLE `target_project_info` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`project_name` varchar(25) NOT NULL,
			`project_sub_title` varchar(25) NOT NULL,
			`pro_description` longtext NOT NULL,
			`pro_referance` varchar(25) NOT NULL,
			`pro_cate` varchar(20) NOT NULL,
			`start_date` varchar(20) NOT NULL,
			`end_date` varchar(25) NOT NULL,
			`total_price` varchar(25) NOT NULL,
			`pay_amount` varchar(20) NOT NULL,
			`due_amount` varchar(20) NOT NULL,
			`pro_developer` varchar(20) NOT NULL,
			`dev_email` varchar(20) NOT NULL,
			`dev_phone` varchar(20) NOT NULL,
			`pro_status` varchar(20) NOT NULL,
			`pro_media` varchar(20) NOT NULL,
			PRIMARY KEY (`id`)
		  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta($tableQuery);

	}

}
