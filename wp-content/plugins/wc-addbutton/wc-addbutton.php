<?php  
/*
  Plugin Name:  WC Addbutton
  
  AutHor: Hitesh Kambad
  
  Description: This plugin is written for test 
  
  Version: 1.0

  Requires at least: 5.2
*/
/*
  This function creates a custom widget for setting header portion contact details 
*/
if(!defined("ABSPATH"))     // path witch defines the rout directory of our project 
{
	exit();
}



if(!defined("WC_ADDBUTTON_URL"))
	define("WC_ADDBUTTON_URL", plugins_url().'/wc-addbutton.php');

define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );


//include( plugin_dir_path( __FILE__ ) . '/quotation-page.php');

/**
 * Check if WooCommerce is active
 **/
if ( 
  in_array( 
    'woocommerce/woocommerce.php', 
    apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) 
  ) 
) {
	add_action( 'woocommerce_after_add_to_cart_button', 'add_custom_button', 10, 0 );
function add_custom_button() { 
   // $my_custom_link = "WC_ADDBUTTON_URL";
    echo '<br /><br /><a class="single_add_to_cart_button button alt" href="' . plugins_url().'/wc-addbutton/quotation-page.php' .'">' . __( "Quotation", "my_theme_slug" )  . '</a>';
}; 
}

register_activation_hook(__FILE__,'file_include');

function file_include(){
	require_once(ABSPATH. 'wp-includes/option.php');
	require_once(ABSPATH. 'wp-includes/pluggable.php');

	

} 

?>