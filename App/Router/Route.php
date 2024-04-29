<?php

namespace App\Router;

use App\Router\Init\Bootstrap;
use App\Router\RouteHandler;

class Route extends Bootstrap
{
    protected function initRoutes()
    {

        //Rt::Get($rota, $controller@$action);

        //Rt:Get("/", 'IndexController&action)

       /* $this->routeHandler->addRoutes('home', '/', 'indexController', 'index');
        $this->routeHandler->addRoutes('about', '/about', 'indexController', 'about');
        $this->routeHandler->addRoutes('contact', '/contact', 'indexController', 'contact');
        $this->routeHandler->addRoutes('relatorio', '/relatorio', 'reportOficinaController', 'report');
        $this->routeHandler->addRoutes('relatorio', '/relatorio/cliente', 'reportClienteController', 'report');

        $routes = $this->routeHandler->getRoutes();*/

        $routes = [
            //Basicas
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

            //Relatórios

            'relatorio' => [
                'route' => '/relatorio',
                'controller' => 'reportOficinaController',
                'action' => 'report'
            ],

            'relatorioCliente' => [
                'route' => '/relatorio/cliente',
                'controller' => 'reportClienteController',
                'action' => 'report'
            ],

            //cadastros carro
            'registerCar' => [
                'route' => '/car/new',
                'controller' => 'carController',
                'action' => 'index'
            ],

            'register' => [
                'route' => '/register',
                'controller' => 'carController',
                'action' => 'create'
            ],

            'info' => [
                'route' => '/car/info',
                'controller' => 'carController',
                'action' => 'find'

            ],

            //cadastro cliente
            'registerClient' => [
                'route' => '/client/new',
                'controller' => 'clientController',
                'action' => 'index'
            ],

            'registerC' => [
                'route' => '/create',
                'controller' => 'clientController',
                'action' => 'create'
            ]
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