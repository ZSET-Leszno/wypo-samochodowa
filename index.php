<?php

/**
 * Fancy Framework for PHP
 * Author: @michus.studio
 * License: MIT
 * Version: 0.1.8
 */

const VERSION = '0.3.3';
const APP_NAME = 'wypo-samochodowa';
const APP_AUTHOR = '@michus.studio';
const ENV = 'dev';

switch (ENV) {
    case 'dev':
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        break;
    case 'prod':
        error_reporting(0);
        ini_set('display_errors', 0);
        break;
    default:
        header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
        echo 'Środowisko aplikacji nie jest poprawnie ustawione.';
        exit(1);
}

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/app/WhoopsHandler.php';
require_once __DIR__ . '/app/Routing/Routes.php';
$blade = new \eftec\bladeone\BladeOne(__DIR__ . '/views', __DIR__ . '/views_cache', \eftec\bladeone\BladeOne::MODE_AUTO);
$config = new App\Config\AppConfig();
function view(string $view, array $variables = [])
{
    global $blade, $config;
    return $blade->run($view, $variables + ['config' => $config]);
}

date_default_timezone_set('Europe/Warsaw');
header('X-Powered-By: ' . APP_AUTHOR);
header('X-App-Version: ' . VERSION);
header('X-App-Name: ' . APP_NAME);
header('X-App-Env: ' . ENV);
session_name(APP_NAME . '-session');
session_start();

/** @var TYPE_NAME $router */
echo $router->handle($_SERVER, $config);
