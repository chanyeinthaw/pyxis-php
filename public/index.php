<?php
require '../vendor/autoload.php';
require '../config.php';
require '../lib/helpers.php';

Driver\Database::setup();
Driver\Router::setup(__DIR__ . '/../routes');

if (function_exists('fastcgi_finish_request')) {
    fastcgi_finish_request();
}

exit(0);