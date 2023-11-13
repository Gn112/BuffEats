<?php

namespace src;

use GHOST\Init\Bootstrap;
class Route extends Bootstrap {

    // Lista com todas as rotas
    protected function initRoutes()
    {
        $routes['index'] = array
        (
            'route' => '/',
            'controller' => 'indexController',
            'action' => 'index'
        );

        $routes['login'] = array
        (
            'route' => '/login',
            'controller' => 'indexController',
            'action' => 'login'
        );

        $this->setRoutes($routes);
    }

}

?>