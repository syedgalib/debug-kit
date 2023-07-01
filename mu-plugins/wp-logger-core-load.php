<?php

/**
 * WP Logger Core
 *
 * @package           WPLoggerCore
 * @author            Syed Galib
 * @copyright         2023 Syed Galib
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       WP Logger
 * Plugin URI:        https://github.com/syedgalib/wp-logger-core
 * Description:       A debugging tool.
 * Version:           0.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Syed Galib
 * Author URI:        https://github.com/syedgalib
 * Text Domain:       wp-logger
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://github.com/syedgalib/wp-logger-core
 */


$path = __DIR__ . '/wp-logger-core/wp-logger-core.php';

if ( file_exists( $path ) ) {
    include_once $path;
}