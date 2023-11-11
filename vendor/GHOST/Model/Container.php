<?php

namespace GHOST\Model;

use src\Connection;
class Container 
{
    public static function getModel($model)
    {
        // Retorna o modelo solicitado, com conexão do banco de dados

        $class = "\\src\\Models\\".ucfirst($model);

        $conn = Connection::getDB();

        return new $class($conn);
    }
}
?>