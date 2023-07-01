<?php

final class WPLogger {

    private static ?WPLogger $instance = null;

    private function __construct() {
        $this->init();
    }

    public static function get_instance(): WPLogger {

        if ( is_null( self::$instance ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function init(): void {
        register_activation_hook( __FILE__, [ $this, 'activate_mu_plugins' ] );
        register_deactivation_hook( __FILE__, [ $this, 'deactivate_mu_plugins' ] );
    }

    public function activate_mu_plugins(): void {
        if ( ! wp_logger_can_use_wp_filesystem() ) {
            return;
        }

        global $wp_filesystem;

        $mu_plugin_path = WPMU_PLUGIN_DIR;

        if ( ! file_exists( $mu_plugin_path ) ) {
            wp_mkdir_p( $mu_plugin_path );
        }

        foreach( wp_logger_get_mu_plugins() as $mu_plugin ) {
            // Install The Plugin If Does Not Exists
            $plugin_dest_path = $mu_plugin_path . "/{$mu_plugin}/";

            if ( ! file_exists( $plugin_dest_path ) ) {
                $plugin_src_path = __DIR__ . "/mu-plugins/{$mu_plugin}/";
                
                $wp_filesystem->mkdir( $plugin_dest_path );
                copy_dir( $plugin_src_path, $plugin_dest_path );
            }

            // Install The Plugin Loader If Does Not Exists
            $loader_dest_path = $mu_plugin_path . "/{$mu_plugin}-load.php";

            if ( ! file_exists( $loader_dest_path ) ) {
                $loader_src_path = __DIR__ . "/mu-plugins/{$mu_plugin}-load.php";
                $wp_filesystem->copy( $loader_src_path, $loader_dest_path );
            }

        }
    }

    public function deactivate_mu_plugins(): void {
        if ( ! wp_logger_can_use_wp_filesystem() ) {
            return;
        }

        global $wp_filesystem;

        $mu_plugin_path = WPMU_PLUGIN_DIR;

        if ( ! file_exists( $mu_plugin_path ) ) {
            return;
        }

        foreach( wp_logger_get_mu_plugins() as $mu_plugin ) {
            $loader_dest_path = $mu_plugin_path . "/{$mu_plugin}-load.php";

            if ( file_exists( $loader_dest_path ) ) {
                $wp_filesystem->delete( $loader_dest_path );
            }
        }
    }
}