<?php

/**
 * WP Logger
 *
 * @package           WPLogger
 * @author            Syed Galib Ahmed
 * @copyright         2023 Syed Galib Ahmed
 * @license           GPL-3.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       WP Logger
 * Plugin URI:        https://github.com/syedgalib/wp-logger
 * Description:       A PHP debugging tool for WordPress.
 * Version:           0.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.0
 * Author:            Syed Galib Ahmed
 * Author URI:        https://github.com/syedgalib
 * Text Domain:       wp-logger
 * License:           GPL v3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Update URI:        https://github.com/syedgalib/wp-logger
 */

defined( 'ABSPATH' ) || exit;

defined( 'WP_LOGGER_FILE' ) || define( 'WP_LOGGER_FILE', __FILE__ );

include __DIR__ . '/utils/config.php';
include __DIR__ . '/utils/helper-functions.php';
include __DIR__ . '/app.php';
include __DIR__ . '/vendor/autoload.php';

if ( ! function_exists( 'WPLogger' ) ) {
    function WPLogger(): WPLogger {
        return WPLogger::get_instance();
    }
}

WPLogger();