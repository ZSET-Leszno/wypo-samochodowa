<?php

/**
 * Router
 * @package App\Routing
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Routing;

use App\Controllers\BaseController;
use App\Exceptions\InvalidRouteControllerParameters;
use App\Exceptions\RouteNotFoundException;
use App\Helpers\MainHelper;

class Router
{
    private RouteManager $routeManager;
    private MainHelper $helper;

    public function __construct()
    {
        $this->routeManager = new RouteManager();
        $this->helper = new MainHelper();
    }

    public function get(string $route, array $controller)
    {
        if (count($controller) != 2) {
            throw new InvalidRouteControllerParameters(sprintf('Parameter controller must have exactly 2 parameters, got %s instead', count($controller)));
        }
        $this->routeManager->add($route, 'GET', $controller);
    }

    public function post(string $route, array $controller)
    {
        if (count($controller) != 2) {
            throw new InvalidRouteControllerParameters(sprintf('Parameter controller must have exactly 2 parameters, got %s instead', count($controller)));
        }
        $this->routeManager->add($route, 'POST', $controller);
    }

    public function handle(array $server)
    {
        $httpMethod = $server['REQUEST_METHOD'];
        $route = str_replace('index.php/', '', parse_url($server['REQUEST_URI'])['path']);

        if ($httpMethod == 'POST') {
            if(empty($_POST['_token']) || $_POST['_token'] != $this->helper->getCsrf()) {
                $_SESSION['error'] = 'Błędny token CSRF';

                return $this->helper->redirect($route);
            }
        }

        try {
            [$controller, $args] = $this->routeManager->resolve($httpMethod, $route);

            [$controllerName, $function] = $controller;

            $controller = new $controllerName;
//            if (!$controller instanceof BaseController) {
//                throw new \LogicException(sprintf('%s must be an instance of BaseController', $controllerName));
//            }

            return $controller->$function(...$args);
        } catch (RouteNotFoundException) {
            return view('404');
        }
    }
}