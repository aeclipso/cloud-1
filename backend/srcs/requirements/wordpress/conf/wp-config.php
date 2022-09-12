<?php
define('WP_CACHE', true);
define('WP_CACHE_KEY_SALT', $_SERVER["SITE_URL"]);
define('WP_REDIS_HOST', 'redis' ); 
define('WP_REDIS_PORT', '6379' ); 

define('DB_NAME', $_SERVER["MYSQL_DB"]);
define('DB_USER', $_SERVER["MYSQL_USER"]);
define('DB_PASSWORD', $_SERVER["MYSQL_PASS"]);
define('DB_HOST', 'db:3306');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');


define('AUTH_KEY',         'XSDrFKTIAbnTDcXd2JvBmLaBbK0R2099t9KW30MtfGMgMvKGjaqFrckcqYjgyjrQ');
define('SECURE_AUTH_KEY',  'ZgMMl8lxvq4BNDXTYusGhrV60dD0OXXVHCnnjShFuWyYKVqRRyHQYOAz8ZwtkmW9');
define('LOGGED_IN_KEY',    '7uPYL2Mgmx3P3mGEmL0ObfCX3Hqv95Z7wBBSFnX2XzLBaUhs1ztMHeoY3CkGfyGK');
define('NONCE_KEY',        'A6SJKfePnjE22l7NGXIu7R2HyAcTZSuXlAzjzUi8xaTdOT6aDoqbl1l2e2t1hbeM');
define('AUTH_SALT',        'eZ7uaOreJFXruCcZqcfEkIO1GUi5NmM8EHkio0k7ox813M3DLHXYKbWjuc23nalB');
define('SECURE_AUTH_SALT', '8vwg4i1znHZevjctpzVFBm720sXcO5Ed0YcJxljQXCENuIPkZdIj3CWMSVzSLpku');
define('LOGGED_IN_SALT',   'gTwOAPKCPiawold4genwo4YuIO8JxqSilcKpoVmtPI6OtQxQFyQdlMXlHYNm7vPA');
define('NONCE_SALT',       'waqDwn2S0X3QV1uqerbeKYQmwkVdp0qqPl2fNLjyKAjAZWSRqsbLluIbe3r6mzGt');
$table_prefix = 'wp_';
define('WP_SITEURL', $_SERVER["SITE_URL"]);

if ( ! define( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/');
}
require_once ABSPATH . 'wp-settings.php';
