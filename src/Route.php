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

        $this->setRoutes($routes);
    }

}

?>