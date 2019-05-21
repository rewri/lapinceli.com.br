<?php

use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {

    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);

    $routes->connect('/pages/*', ['controller' => 'Home', 'action' => 'index']);

    $routes->connect('/a-empresa', ['controller' => 'company', 'action' => 'index']);

    $routes->connect('/servicos', ['controller' => 'company', 'action' => 'services']);

    $routes->connect('/produtos', ['controller' => 'products', 'action' => 'index']);

    $routes->connect('/produto/:slug/:id', ['controller' => 'products', 'action' => 'detail'], ['pass' => ['slug', 'id']]);

    $routes->connect('/dicas', ['controller' => 'tips', 'action' => 'index']);

    $routes->fallbacks(DashedRoute::class);
});

