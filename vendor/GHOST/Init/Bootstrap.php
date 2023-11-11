<?php

namespace GHOST\Init;

abstract class Bootstrap
{
    private $routes;

    abstract protected function initRoutes();

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    // Retorna todas as rotas
    public function getRoutes()
    {
        return $this->routes;
    }

    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    protected function run($url)
    {
        foreach ($this->getRoutes() as $path => $route) {
            if ($url == $route['route']) {
                $class = "src\\Controllers\\" . ucfirst($route['controller']);

                $controller = new $class;

                $action = $route['action'];

                $controller->$action();
            }
        }
    }

    // Retorna a URL em que o usuário está
    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

?>