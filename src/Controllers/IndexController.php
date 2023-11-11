<?php

namespace src\Controllers;

# // Estruturas do Framework
use GHOST\Controller\Action;
use GHOST\Model\Container;
# //

class IndexController extends Action
{
    public function index()
    {

        $this->render('index', '_Layout');
    }
}



?>