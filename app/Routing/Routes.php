<?php

/**
 * Routes
 * @package App\Routing
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Routing;

use App\Routing\Router;

$router = new Router();
$router->get('/', [\App\Controllers\HomeController::class, 'index']);
$router->get('/strona-glowna', [\App\Controllers\HomeController::class, 'index']);
$router->get('/logowanie', [\App\Controllers\LoginController::class, 'index']);
$router->get('/rejestracja', [\App\Controllers\RegisterController::class, 'index']);
$router->get('/kontakt', [\App\Controllers\ContactController::class, 'index']);
$router->get('/samochody', [\App\Controllers\CarController::class, 'index']);

$router->get('/api/car/getTypes/{brand}', [\App\Controllers\API\CarController::class, 'getTypes']);
$router->get('/api/car/getModels/{brand}/{type}', [\App\Controllers\API\CarController::class, 'getModels']);

$router->post('/api/contact/send', [\App\Controllers\API\ContactController::class, 'send']);