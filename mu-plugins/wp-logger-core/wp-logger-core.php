<?php

final class WPLoggerCore {

    private static ?WPLoggerCore $instance = null;
    private string $date_format            = 'Y-m-d h:i:s A';
    private string $timezone               = 'Asia/Dhaka';

    private function __construct() {
        $this->init();
    }

    public static function get_instance(): WPLoggerCore {

        if ( is_null( self::$instance ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function init() {
        add_filter( 'wp_logger_add', [ $this, 'logger_add'], 10, 4 );
        add_action( 'wp_logger_print', [ $this, 'logger_print'], 10, 1 );
        add_action( 'wp_logger_clear', [ $this, 'logger_clear'], 10, 1 );
    }

    public function logger_add( $data, $namespace = null, $file = null, $line = null ) {
        $logger_file_path = $this->get_logger_file_path();
        $logs             = $this->get_logger_data( $logger_file_path );

        $date = new DateTime( 'now', new DateTimeZone( $this->timezone ) );

        $logs[] = [
            'data'      => $data,
            'namespace' => $namespace,
            'file'      => $file,
            'line'      => $line,
            'time'      => $date->format( $this->date_format )
        ];

        file_put_contents( $logger_file_path, json_encode( $logs ) );
    
        return $logs;
    }

    public function logger_print() {
        $logger_file_path = $this->get_logger_file_path();

        echo '<pre>';
        print_r( $this->get_logger_data( $logger_file_path ) );
        echo '</pre>';
    }

    public function logger_clear() {
        $logger_file_path = $this->get_logger_file_path();
        file_put_contents( $logger_file_path, '[]' );
    }

    private function get_logger_data( $logger_file_path ) {
        $contents = file_get_contents( $logger_file_path );
        $data     = json_decode( $contents, true );
        return is_array( $data ) ? $data : [];
    }

    private function get_logger_file_path() {
        return dirname( __FILE__ ) . '/logs.json';
    }

}

if ( ! function_exists( 'WPLoggerCore' ) ) {
    function WPLoggerCore(): WPLoggerCore {
        return WPLoggerCore::get_instance();
    }
}

WPLoggerCore();