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

    public function insertInfo($table, $parameters) {
        $pdo->exec('INSERT INTO $s VALUES $s ', $table, $parameters);
    }


}

