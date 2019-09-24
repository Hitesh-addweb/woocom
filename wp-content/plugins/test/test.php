<?php 
//require_once ("./../wp-includes/option.php");

/*
	Plugin Name: Plugin-custom
	
	AutHor: Hitesh Kambad
	
	Description: This plugin is written for test purpose
	
	Version: 1.0

	Requires at least: 5.2
*/
/*
	This function creates a custom widget for setting header portion contact details 
*/
	if(!defined("MY_TEST_DIR_PATH"))

	define("MY_TEST_DIR_PATH", plugin_dir_path(__FILE__));
if(!defined("MY_TEST_URL"))
	define("MY_TEST_URL", plugins_url().'/test');

	function add_custom_menu()  //plugin menu in admin panel
	{
		add_menu_page("custom-pligin","custom plugin","manage_options","custom-plugin","function_menu_call");

		add_submenu_page("custom-plugin","add new","add new","manage_options","add-new","function_submenu_call"); //submenu page

		add_submenu_page("custom-plugin","all pages","all pages","manage_options","all-pages","function_submenu_call1"); 
	}

	add_action("admin_menu","add_custom_menu");

	function function_menu_call()
	{
			echo "<h1>custom plugin</h1>";
	}

	function function_submenu_call()
	{
		include_once MY_TEST_DIR_PATH.'/views/submenu1.php';
	}
	function function_submenu_call1()
	{
				include_once MY_TEST_DIR_PATH.'/views/submenu2.php';

		
	}


	register_activation_hook(__FILE__,'create_table_function');

	function create_table_function()
	{
		global $wpdb;

		include_once ABSPATH.'/wp-admin/includes/upgrade.php';

		if(count($wpdb->get_var('SHOW TABLES LIKE "custom_table"'))==0)
		{
			$qry="CREATE TABLE `custom_table` (
				 `id` int(255) NOT NULL AUTO_INCREMENT,
				 `name` varchar(255) NOT NULL,
				 `email` varchar(255) NOT NULL,
				 `contact` varchar(255) NOT NULL,
				 PRIMARY KEY (`id`)
				) ENGINE=InnoDB DEFAULT CHARSET=latin1";

	dbDelta($qry);
		}
	}



	register_deactivation_hook(__FILE__,'delete_table_function');//action on deactivate the plugin //use uninstall insted of deactivatio while deleting the plugin

	function delete_table_function()
	{
		global $wpdb;
		$wpdb->query("DROP TABLE IF Exists custom_table");
	}