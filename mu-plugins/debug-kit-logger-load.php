<?php

/**
 * Debug Kit - Logger
 * 
 * Plugin Name: Debug Kit - Logger
 * Description: A PHP debugging tool for WordPress.
 */

$path = __DIR__ . '/debug-kit-logger/debug-kit-logger.php';

if ( file_exists( $path ) ) {
    include_once $path;
}