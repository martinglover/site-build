<?php

defined('ENV') || define('ENV', (getenv('ENV') ? getenv('ENV') : 'live'));

global $project;
$project = 'mysite';

require_once("conf/ConfigureFromEnv.php");

// Set the site locale
i18n::set_locale('en_GB');


switch (ENV) {
    case 'sandbox':
        SS_Cache::set_cache_lifetime('default', -1, 100);
        $cache = SS_Cache::factory('default');
        $cache->clean(Zend_Cache::CLEANING_MODE_ALL);
        break;

    case 'still':
        SS_Cache::set_cache_lifetime('default', -1, 100);
        break;

    case 'live':
    default:

        break;
}

