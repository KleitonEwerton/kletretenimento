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

    public function insertInfo($table, $parameters){
        $pdo -> exec('INSERT INTO $s VALUES $s ',$table , $parameters);
    }

    public function delete($table, $id){
        $pdo -> exec('DELETE FROM $s WHERE $s',$table, $id);

        try{
            $stmt = this->pdo;

            $stmt->exec(compact($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
