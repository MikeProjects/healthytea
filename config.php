<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/healthytea/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/healthytea/');

// DIR
define('DIR_APPLICATION', 'C:\xampp\htdocs\healthytea/catalog/');
define('DIR_SYSTEM', 'C:\xampp\htdocs\healthytea/system/');
define('DIR_DATABASE', 'C:\xampp\htdocs\healthytea/system/database/');
define('DIR_LANGUAGE', 'C:\xampp\htdocs\healthytea/catalog/language/');
define('DIR_TEMPLATE', 'C:\xampp\htdocs\healthytea/catalog/view/theme/');
define('DIR_CONFIG', 'C:\xampp\htdocs\healthytea/system/config/');
define('DIR_IMAGE', 'C:\xampp\htdocs\healthytea/image/');
define('DIR_CACHE', 'C:\xampp\htdocs\healthytea/system/cache/');
define('DIR_DOWNLOAD', 'C:\xampp\htdocs\healthytea/download/');
define('DIR_LOGS', 'C:\xampp\htdocs\healthytea/system/logs/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'ochealthytea');
define('DB_PASSWORD', 'ochealthytea');
define('DB_DATABASE', 'ochealthytea');
define('DB_PREFIX', '');

// For fixing the error:
//    /usr/local/lib/php/foot.php on line 4: Undefined variable: c_ads
// See link:
//    http://www.000webhost.com/forum/customer-assistance/34478-usr-local-lib-php-foot-php-line-4-undefined-variable-c_ads.html
$c_ads=false;
$c_ads_code=false;

?>