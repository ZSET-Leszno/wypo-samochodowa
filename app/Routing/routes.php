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
$router->get('/strona-glowna', [\App\Controllers\RegisterController::class, 'index']);
$router->get('/logowanie', [\App\Controllers\ContactController::class, 'index']);
$router->get('/rejestracja', [\App\Controllers\RegisterController::class, 'index']);
$router->get('/kontakt', [\App\Controllers\ContactController::class, 'index']);
$router->get('/samochody', [\App\Controllers\CarController::class, 'index']);