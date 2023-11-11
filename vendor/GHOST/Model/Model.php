<?php

namespace GHOST\Model;
use PDO;

abstract class Model
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
}

?>