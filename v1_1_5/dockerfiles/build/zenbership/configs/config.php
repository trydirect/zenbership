<?php
define('PP_BASE_PATH','/var/www/html');
define('PP_PATH','/var/www/html/zenbership-115');
define('PP_URL','http://localhost');
define('PP_ADMINPATH','/var/www/html/zenbership-115/admin');
define('PP_ADMIN','http://localhost/admin');
define('PP_PREFIX','ppSD_');
define('PP_MYSQL_HOST','mysql');
define('PP_MYSQL_DB','zenbership');
define('PP_MYSQL_USER','zenbership');
define('PP_MYSQL_PASS','zenbership');
define('ZEN_SECRET_PHRASE','');
define('ZEN_HIDE_DEBUG_TIME', false);
define('DISABLE_CAPTCHA', false);
define('DISABLE_PERFORMANCE_BOOSTS', false);
require PP_ADMINPATH . "/sd-system/loader.php";
