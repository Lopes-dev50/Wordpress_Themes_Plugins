<?php
/*
Plugin Name: Add Buton
Plugin URI: http://devfree.com.br
Description: Adicina dois botões ao topo do site um para comprar usando hotmart outro ver video no youtube.
Author: DevFree
Version: 1.0.0
Author URI: http://devfree.com.br
Text Domain: butons
*/
if ( !function_exists( 'add_action' ) ) {
	echo 'Opa! ';
	exit;
}
//Setup
define('BUTON_PLUGIN_URL', __FILE__);
//Include
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/admin_init.php');
include('includes/filter-content.php');
//Hooks
register_activation_hook(BUTON_PLUGIN_URL, 'df_activate_plugin');
add_action('init', 'df_butons_init');
add_action('admin_init', 'df_butons_admin_init');
add_action('save_post_buton', 'df_save_post_admin', 10, 3);
add_action('the_content', 'df_filter_buton_content');
add_action('wp_footer', 'df_filter_buton_content');

//Shortcodes





