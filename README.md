# WP Logger
WP Logger is a PHP debugging tool for WordPress.

## Examples

### Add Log
```php
apply_filters( 'debug_kit_add_log', [ 'test' => 123 ], 'my-plugin', __FILE__, __LINE__ );
```

### Print Logs
```php
do_action( 'debug_kit_print_log' );
```

### Clear Logs
```php
do_action( 'debug_kit_clear_log' );
```

## REST API
### Get Logs
```php
$route = 'https://site.com/wp-json/wp-logger/logs' // GET Request
```

### Clear Logs
```php
$route = 'https://site.com/wp-json/wp-logger/logs' // DELETE Request
```
