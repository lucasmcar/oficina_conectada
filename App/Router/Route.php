<?php

namespace App\Router;

use App\Router\Init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {

        $routes['home'] = [
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        ];

        $routes['about'] = [
            'route' => '/about',
            'controller' => 'indexController',
            'action' => 'about'
        ];

        $this->setRoutes($routes);
    }
}