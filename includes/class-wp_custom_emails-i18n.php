<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.linkedin.com/in/mustafa-shaaban22/
 * @since      1.0.0
 *
 * @package    Wp_custom_emails
 * @subpackage Wp_custom_emails/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_custom_emails
 * @subpackage Wp_custom_emails/includes
 * @author     Mustafa Shaaban <mustafashaaban22@gmail.com>
 */
class Wp_custom_emails_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp_custom_emails',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
