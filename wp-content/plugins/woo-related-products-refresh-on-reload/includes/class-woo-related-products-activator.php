<?php
/**
 * Fired during plugin activation
 *
 * @link       https://peachpay.app
 * @since      1.0.0
 *
 * @package    Woo_Related_Products
 * @subpackage Woo_Related_Products/includes
 */

defined( 'ABSPATH' ) || exit;

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Woo_Related_Products
 * @subpackage Woo_Related_Products/includes
 * @author     EBOXNET.com <info@eboxnet.com>
 */
class Woo_Related_Products_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		// Initialize default plugin options if they don't exist
		self::initialize_default_options();
		
		wrprr_record_analytics( true );
	}
	
	/**
	 * Initialize default plugin options.
	 *
	 * @since 3.3.17
	 */
	private static function initialize_default_options() {
		$default_options = array(
			'woorelated_wtitle'     => 'Related Products',
			'woorelated_nproducts'  => '4',
			'woorelated_basedon'    => 'product_cat',
			'woorelated_exclude'    => '',
			'woorelated_slider'     => 'Disabled',
		);
		
		foreach ( $default_options as $option_name => $default_value ) {
			if ( false === get_option( $option_name ) ) {
				add_option( $option_name, $default_value );
			}
		}
	}
}
