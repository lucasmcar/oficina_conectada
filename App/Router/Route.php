<?php

namespace App\Router;

use App\Router\Init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {

        //Rt::Get($rota, $controller@$action);

        //Rt:Get("/", 'IndexController&action)

        $routes = [

            'home' => [
                'route' => '/',
                'controller' => 'indexController',
                'action' => 'index'
            ],

            'about' => [
                'route' => '/about',
                'controller' => 'indexController',
                'action' => 'about'
            ],

            'contact' => [
                'route' => '/contact',
                'controller' => 'indexController',
                'action' => 'contact'
            ],

            'relatorio' => [
                'route' => '/relatorio',
                'controller' => 'reportController',
                'action' => 'report'
            ],
        ];

        /*$routes['home'] = [
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        ];

        $routes['about'] = [
            'route' => '/about',
            'controller' => 'indexController',
            'action' => 'about'
        ];*/

        $this->setRoutes($routes);
    }
}