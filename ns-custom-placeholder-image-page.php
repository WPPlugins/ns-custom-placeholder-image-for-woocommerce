<?php
/*
Plugin Name: NS Custom Placeholder Image For Woocommerce
Plugin URI: https://www.nsthemes.com/
Description: This plugin allow to choose the placeholder to show in woocommerce product page
Version: 1.0.1
Author: NsThemes
Author URI: http://www.nsthemes.com
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! defined( 'CUSPLACEHOLDER_NS_PLUGIN_DIR' ) )
    define( 'CUSPLACEHOLDER_NS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

if ( ! defined( 'CUSPLACEHOLDER_NS_PLUGIN_DIR_URL' ) )
    define( 'CUSPLACEHOLDER_NS_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );



/* *** plugin options *** */
require_once( CUSPLACEHOLDER_NS_PLUGIN_DIR.'/ns-custom-placeholder-image-options.php');


require_once( plugin_dir_path( __FILE__ ).'ns-admin-options/ns-admin-options-setup.php');


/*Set the choosen placeholder image*/
add_action( 'init', 'cpiw_custom_fix_thumbnail' );
 
function cpiw_custom_fix_thumbnail() {
  add_filter('woocommerce_placeholder_img_src', 'cpiw_custom_woocommerce_placeholder_img_src');
   
	function cpiw_custom_woocommerce_placeholder_img_src( $src ) {
		$src = get_option('ns-placeholder-image-from-list'); 
		if($src != false){
			return $src;
		}
		else{
			//echo 'Error';
		}	
	}
}

function cpiw_enqueue_media_uploader()
{
    wp_enqueue_media();
}

add_action("admin_enqueue_scripts", "cpiw_enqueue_media_uploader");

?>