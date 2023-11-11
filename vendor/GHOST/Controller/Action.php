<?php

namespace GHOST\Controller;

use stdClass;

abstract class Action {

    protected $view;

    public function __construct()
    {
        $this->view = new stdClass();
    }
    protected function render($view, $layout)
    {
        $this->view->page = $view;

        if(file_exists("../src/Views/".$layout.".phtml"))
        {
            require_once "../src/Views/".$layout.".phtml";
        }
        else
        {
           $this->content(); 
        }
    }

    protected function content()
    {
        $classAtual = str_replace('src\\Controllers\\', '', get_class($this));

        $classAtual = strtolower(str_replace('Controller', '', $classAtual));

        require_once "../src/Views/".$classAtual."/".$this->view->page.".phtml"; 
    }
}
?>