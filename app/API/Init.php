<?php

namespace WPLogger\API;

use WPLogger\Utility\Serve;

class Init {

    public function __construct() {
        $controllers = $this->get_rest_api_controllers();
        Serve::register_services( $controllers );
    }

    protected function get_rest_api_controllers(): array {
        return [
            Logger::class,
        ];
    }

}