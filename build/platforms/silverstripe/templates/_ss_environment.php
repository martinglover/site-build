<?php

defined('ENV') || define('ENV', (getenv('ENV') ? getenv('ENV') : 'live'));

// These three defines set the database connection details.
define('SS_DATABASE_SERVER', '${deploy.db.host}');
define('SS_DATABASE_USERNAME', '${deploy.db.username}');
define('SS_DATABASE_PASSWORD', '${deploy.db.password}');
define('SS_DATABASE_NAME', '${deploy.db.name}');

define('SS_ENVIRONMENT_TYPE', 'dev');

// These two defines sets a default login which, when used, will always log
// you in as an admin, even creating one if none exist.
define('SS_DEFAULT_ADMIN_USERNAME', '${deploy.cms.username}');
define('SS_DEFAULT_ADMIN_PASSWORD', '${deploy.cms.password}');

define('SS_SEND_ALL_EMAILS_TO', '${deploy.site.email}');

global $_FILE_TO_URL_MAPPING;
$_FILE_TO_URL_MAPPING['${deploy.site.path}/site'] = 'http://${deploy.site.url}';