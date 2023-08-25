<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.facebook.com/AbdurRahamanWP
 * @since      1.0.0
 *
 * @package    Target_Project_List
 * @subpackage Target_Project_List/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Target_Project_List
 * @subpackage Target_Project_List/admin
 * @author     Target Soft BD <webrahaman@gmail.com>
 */
class Target_Project_List_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Target_Project_List_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Target_Project_List_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/target-project-list-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'bootstrap', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'dataTables', plugin_dir_url( __FILE__ ) . 'css/dataTables.bootstrap5.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'style', plugin_dir_url( __FILE__ ) . 'css/style.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Target_Project_List_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Target_Project_List_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/target-project-list-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'bootstrap-min', plugin_dir_url( __FILE__ ) . 'js/bootstrap.min.js', array( 'jquery' ), $this->version, false );

	}

	public function target_project_menu(){

		add_menu_page(
			'Target Project',
			'Target Project',
			'manage_options',
			'project_list_plugin',
			array($this,"target_project_new_project"),
			'dashicons-menu-alt',
			9
		);

		add_submenu_page(
			'project_list_plugin',
			'New Project',
			'New Project',
			'manage_options',
			'project_list_plugin',
			array($this,"target_project_new_project"),
			'dashicons-menu-alt',
			9
		);

		add_submenu_page(
			'project_list_plugin',
			'All Project',
			'All Project',
			'manage_options',
			'custom-plugin',
			array($this,"target_project_view_project"),
			'dashicons-menu-alt',
			9
		);
	
		
	
	}

	public function target_project_new_project(){
		ob_start();
		require_once plugin_dir_path(__FILE__) . "partials/template/new_project.php"; 
		$template = ob_get_contents();
		ob_end_clean();
		echo $template;
	}


	public function target_project_view_project(){
		ob_start();
		require_once plugin_dir_path(__FILE__) . "partials/template/view_project.php"; 
		$template = ob_get_contents();
		ob_end_clean();
		echo $template;
	}

}
