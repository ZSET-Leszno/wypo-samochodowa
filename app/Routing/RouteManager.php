<?php

/**
 * Route manager
 * @package App\Routing
 * @author @michus.studio
 * @license MIT
 * @version 0.1.0
 * @since 0.1.0
 */

namespace App\Routing;

use App\Exceptions\RouteNotFoundException;

class RouteManager
{
    private $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function add(string $route, string $method, array $controller)
    {
        $this->routes[strtoupper($method)][$route] = $controller;
    }

    public function resolve(string $method, string $route)
    {
        $routes = $this->routes[$method];
        $paths = array_keys($routes);

        $routeExploded = explode('/', $route);

        foreach ($paths as $path) {
            $loopPathExploded = explode('/', $path);

            $matchingParts = array_intersect($loopPathExploded, $routeExploded);

            $pathVariableValues = array_diff($routeExploded, $matchingParts);

            $pathVariableKeys = array_diff($loopPathExploded, $matchingParts);
            $pathVariableKeys = array_filter($pathVariableKeys, function ($item) {
                return preg_match('/{(.*?)}/', $item);
            });

            if (count($pathVariableKeys) == count($pathVariableValues) &&
                count($matchingParts) + count($pathVariableKeys) == count($loopPathExploded) &&
                count($matchingParts) > 1) {
                return [
                    $routes[$path],
                    $pathVariableValues
                ];
            }
        }

        throw new RouteNotFoundException();
    }
}