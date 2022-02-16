<?php
class WCSCustomSpinner
{
    public static function wcs_init()
    {
        add_action('wp_head', array('WCSCustomSpinner','wcs_custom_ajax_spinner'), 1000 );
    }

    public static function wcs_custom_ajax_spinner() 
    {
        $plugin_uri = str_replace('/includes', '' , plugin_dir_url(__FILE__));

        wp_enqueue_style('wcs-style', $plugin_uri . 'views/assets/css/wcs_custom_style.css');
    }

    public static function wcs_wc_missing_notice()
    {
		printf("<div class='notice notice-warning'><p>O WooCommerce não está intalado, para usar o Woo Custom Spinner é necessário <a href='https://br.wordpress.org/plugins/woocommerce/' target='blanck'>instalar o WooCommerce</a>.</p></div>");
	}
}