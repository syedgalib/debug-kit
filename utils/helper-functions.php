<?php

function wp_logger_can_use_wp_filesystem() {
    if ( ! function_exists( 'WP_Filesystem' ) ) {
        require_once ABSPATH . 'wp-admin/includes/file.php';
    }

    return WP_Filesystem() ? true : false;
}

function wp_logger_get_mu_plugins(): array {
    return [
        'wp-logger-core',
    ];
}