<?php

/**
 * WP Logger Core
 * 
 * Plugin Name: WP Logger Core
 * Description: A PHP debugging tool for WordPress.
 */

$path = __DIR__ . '/wp-logger-core/wp-logger-core.php';

if ( file_exists( $path ) ) {
    include_once $path;
}