<?php

if (!defined('WEBAPP_ROOT_DIR')) {
    define('WEBAPP_ROOT_DIR', dirname(__DIR__, 4));
}

$bootstrap = WEBAPP_ROOT_DIR . '/vendor/hiqdev/hidev-webapp/src/bootstrap.php';

if (!file_exists($bootstrap)) {
    die("Run composer to set up dependencies!\n");
}

require_once $bootstrap;
