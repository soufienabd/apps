<?php
/**
 * Deactivation class.
 *
 * @package BlockArt
 * @since 1.0.0
 */

namespace BlockArt;

defined( 'ABSPATH' ) || exit;

/**
 * Deactivation class.
 */
class Deactivation {

	/**
	 * Single instance of this class.
	 *
	 * @var null
	 */
	private static $instance = null;

	/**
	 * Init.
	 *
	 * @since 1.0.0
	 */
	public static function init() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Constructor.
	 */
	private function __construct() {
		register_deactivation_hook( BLOCKART_PLUGIN_FILE, array( __CLASS__, 'on_deactivate' ) );
	}

	/**
	 * Callback for plugin deactivation hook.
	 *
	 * @since 1.0.0
	 */
	public static function on_deactivate() {}
}
