<?php
/**
 * Plugin Name:			Woo Custom Spinner
 * Description:			Custom spinner for woocommerce.
 * Version:				1.0.11
 * Author:				Devmunds
 * Author URI:			https://www.devmunds.com.br/
 * Requires at least:	5.0
 * Tested up to:		5.9
 * Requires PHP: 		7.0
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * 
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . "/includes/WCSCustomSpinner.php";

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    WCSCustomSpinner::wcs_init();
} else {
	add_action( 'admin_notices', array('WCSCustomSpinner','wcs_wc_missing_notice') );
}

add_action('wp_head', array('WCSCustomSpinner','wcs_custom_ajax_spinner'), 1000 );