<?php
/**
 * Plugin Name: Zidi TopBar Menu
 * Plugin URI: https://www.zidithemes.com/plugins/zidi-topbar-menu
 * Description: Zidi TopBar Menu helps create a modern and elegant topbar menu or call to action section in your website.
 * Version: 0.0.03
 * Author: zidithemes
 * Author URI: https://zidithemes.com
 * Requires at least: 5.0
 * Tested up to: 5.5
 *
 * Text Domain: zidi-topbar-menu
 *
 * 
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


require_once( dirname(__FILE__ ) . '/includes/options.php' );
require_once( dirname(__FILE__ ) . '/includes/customizer.php' );
require_once( dirname(__FILE__ ) . '/includes/functions.php' );


//admin style

if (!function_exists('zidi_topbar_menu_admin_style')) {
	function zidi_topbar_menu_admin_style() {
		
		
			wp_enqueue_style('zidi-topbar-menu-admin-script-style', plugin_dir_url(__FILE__ ) . 'assets/css/zidi-settings-page.css');
		
	}
}
add_action('admin_enqueue_scripts', 'zidi_topbar_menu_admin_style');



//ENQUEUE SCRIPTS
function zidithemes_topbar_menu_enqueue_scripts(){
	//ADD CSS
	wp_enqueue_style('zidi-topbar-menu-style', plugin_dir_url(__FILE__ ) . 'assets/css/style.css');

	//ADD JS
	wp_enqueue_script('zidi-topbar-menu-script', plugin_dir_url(__FILE__ ) . 'assets/js/init.js');
}

add_action('wp_enqueue_scripts', 'zidithemes_topbar_menu_enqueue_scripts');