<?php

/**
 * WP Logger
 *
 * @package           WPLogger
 * @author            Syed Galib
 * @copyright         2023 Syed Galib
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       WP Logger
 * Plugin URI:        https://github.com/syedgalib/wp-logger
 * Description:       A debugging tool.
 * Version:           0.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Syed Galib
 * Author URI:        https://github.com/syedgalib
 * Text Domain:       wp-logger
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://github.com/syedgalib/wp-logger
 */


include __DIR__ . 'utils/helper-functions.php';
include __DIR__ . '/app.php';

if ( ! function_exists( 'WPLogger' ) ) {
    function WPLogger(): WPLogger {
        return WPLogger::get_instance();
    }
}

WPLogger();