# WP Logger
WP Logger is a PHP debugging tool for WordPress.

## Examples

### Add Log
```php
apply_filters( 'wp_logger_add', [ 'test' => 123 ], 'my-plugin', __FILE__, __LINE__ );
```

### Print Logs
```php
do_action( 'wp_logger_print' );
```

### Clear Logs
```php
do_action( 'wp_logger_clear' );
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
