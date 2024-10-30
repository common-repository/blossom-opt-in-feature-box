<?php
/**
 * Plugin Name: Blossom Opt_in Feature Box
 * Plugin URI:  https://profiles.wordpress.org/walexconcepts/
 * Description: Blossom is an attention grabbing feature box that conditionally pops up at the center of the user's screen for maximum visibility and user engagement. It can be used as the classic opt-in box to capture user's email, or simply to display important content such as an announcement or even an advertisement.
 * Version:     1.0
 * Author:      Awodeyi Adewale Emmanuel 
 * Author URI:  https://www.walexconcepts.com/
 * License:     GPLv2+
 */
if ( ! defined( 'ABSPATH' ) ) exit;


wp_enqueue_script('jquery');



function blossom_opt_in_feature_box_home() {
global $wpdb;
require plugin_dir_path( __FILE__ ) . 'include/optincontent.php';

}
add_shortcode('blossom_opt_in_feature_box','blossom_opt_in_feature_box_home');



function blossom_opt_in_feature_box_scripts(){
	wp_enqueue_script('jquery-1.11.1', plugins_url('js/jquery-1.11.1.min.js', __FILE__ ));       
	wp_enqueue_style('blossomfeatureboxcss', plugins_url('css/blossomfeaturebox.css', __FILE__ ));
	wp_enqueue_style('optincontentcss', plugins_url('css/optincontent.css', __FILE__ ));
	wp_enqueue_script('blossomfeatureboxjs', plugins_url('js/blossomfeaturebox.js', __FILE__ ));       
	wp_enqueue_script('custom_blossomfeaturebox', plugins_url('js/custom_blossomfeaturebox.js', __FILE__ ));
	$array = array(
	'var1' => '#optincontent',
	'var2' => 'newspaper',
	'var3' => '20%',
	'var4' => 'always',
	);
	wp_localize_script( 'custom_blossomfeaturebox', 'php_vars', $array );

}
add_action('wp_enqueue_scripts', 'blossom_opt_in_feature_box_scripts' );



function blossom_opt_in_feature_box_admin_menu() {
	add_menu_page( 'Blossom Opt_in Feature Box', 'Blossom Opt_in Feature Box', null, 'administrator_blossom_opt_in_feature_box', '', plugin_dir_url( __FILE__ ) . 'adminicon.png');
	add_submenu_page( 'administrator_blossom_opt_in_feature_box', __( 'Help', 'administrator_blossom_opt_in_feature_box' ), __( 'Help', 'administrator_welcomebox' ), 'manage_options', 'help_blossom_opt_in_feature_box', 'blossom_opt_in_feature_box_help');
	wp_enqueue_style( 'formstylewelcomebox', plugins_url( 'admin/css/blossom_opt_in_feature_box_formstyle.css', __FILE__ ));
}
function blossom_opt_in_feature_box_help(){
	require plugin_dir_path( __FILE__ ) . 'admin/blossom_opt_in_feature_box_help.php';

}
add_action('admin_menu', 'blossom_opt_in_feature_box_admin_menu');




function blossom_opt_in_feature_box_link( $links){
	$links[] = '<a href="admin.php?page=help_blossom_opt_in_feature_box">Help</a>' ;		
	$links[] = '<a target="_blank" href="https://walexconcepts.com/index.php?page=item&id=19">Go Premium!</a>' ;
	return $links;
}
add_filter( 'plugin_action_links_'.plugin_basename(__FILE__), 'blossom_opt_in_feature_box_link');










