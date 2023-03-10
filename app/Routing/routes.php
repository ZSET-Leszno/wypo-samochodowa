<?php

/**
 * Routes
 * @package App\Routing
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

use App\Routing\Router;

$router = new Router();
$router->get('/', [\App\Controllers\HomeController::class, 'index']);