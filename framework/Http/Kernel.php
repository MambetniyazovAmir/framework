<?php

namespace Amirniyaz\Framework\Http;


use FastRoute\Dispatcher;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel
{
    public function handle(Request $request): Response
    {
        // create dispatcher

        $dispatcher = simpleDispatcher(function (RouteCollector $routeCollector) {

            $routes = include BASE_PATH . '/routes/web.php';

            foreach ($routes as $route){
                $routeCollector->addRoute(...$route);
            }
        });

        // dispatch a URI, to obtain the route info

        $routeInfo = $dispatcher->dispatch(
            $request->getMethod(),
            $request->getPathInfo(),
        );

        [$status, [$controller, $method], $vars] = $routeInfo;

        return call_user_func_array([new $controller, $method], $vars);
    }
}