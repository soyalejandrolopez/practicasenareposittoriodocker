<?php
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpresspassword');
define('DB_HOST', 'mysql');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

# ... otras configuraciones de WordPress

define('AUTH_KEY', 'tu_clave_secreta');
define('SECURE_AUTH_KEY', 'tu_clave_secreta');
define('LOGGED_IN_KEY', 'tu_clave_secreta');
define('NONCE_KEY', 'tu_clave_secreta');

# ... otras claves secretas

$table_prefix = 'wp_';

# ... otras configuraciones de WordPress

define('WP_DEBUG', false);

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}
