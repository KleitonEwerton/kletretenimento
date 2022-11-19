<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function insertInfo($pdo, $parameters){
        $pdo -> exec('INSERT INTO $s ($s) VALUES $s {$parameters}');
    }
}
