<?php
$_SETTINGS['b8']['database']['servers']['read'] = ['${deploy.db.host}'];
$_SETTINGS['b8']['database']['servers']['write'] = ['${deploy.db.host}'];
$_SETTINGS['b8']['database']['name'] = '${deploy.db.name}';
$_SETTINGS['b8']['database']['username'] = '${deploy.db.username}';
$_SETTINGS['b8']['database']['password'] = '${deploy.db.password}';

$_SETTINGS['site']['url'] = 'http://${deploy.site.url}';
$_SETTINGS['site']['name'] = '${deploy.site.name}';
$_SETTINGS['site']['namespace'] = '${platform.octo.namespace}';
$_SETTINGS['site']['admin_uri'] = '${platform.octo.adminurl}';
$_SETTINGS['app']['date_format'] = 'F jS Y, g:ia';
$_SETTINGS['site']['assets'] = APP_PATH . 'public/assets/';
$_SETTINGS['site']['email_from'] = '${deploy.site.name} <${deploy.site.email}>';

$moduleManager->enable('Octo', 'Pages');
$moduleManager->enable('Octo', 'News');
$moduleManager->enable('Octo', 'Media');
$moduleManager->enable('Octo', 'Forms');
$moduleManager->enable('Octo', 'Menu');
$moduleManager->enable('Octo', 'Categories');
$moduleManager->enable('Octo', 'Articles');
$moduleManager->enable('Octo', 'Analytics');
