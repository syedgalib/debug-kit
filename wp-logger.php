<?php

/**
 * Debug Kit
 *
 * @package           DebugKit
 * @author            Syed Galib Ahmed
 * @copyright         2023 Syed Galib Ahmed
 * @license           GPL-3.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Debug Kit
 * Plugin URI:        https://github.com/syedgalib/debug-kit
 * Description:       A PHP debugging tool for WordPress.
 * Version:           0.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.0
 * Author:            Syed Galib Ahmed
 * Author URI:        https://github.com/syedgalib
 * Text Domain:       debug-kit
 * License:           GPL v3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Update URI:        https://github.com/syedgalib/debug-kit
 */

defined( 'ABSPATH' ) || exit;

defined( 'DEBUG_KIT_FILE' ) || define( 'DEBUG_KIT_FILE', __FILE__ );

include __DIR__ . '/utils/config.php';
include __DIR__ . '/utils/helper-functions.php';
include __DIR__ . '/app.php';
include __DIR__ . '/vendor/autoload.php';

if ( ! function_exists( 'DebugKit' ) ) {
    function DebugKit(): DebugKit {
        return DebugKit::get_instance();
    }
}

DebugKit();