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
        $pdo -> exec('INSERT INTO $s VALUES $s ',$table , implode(', ', array_keys($parameters)),
        ':' . implode(', :', array_keys($parameters)));
    }

    public function delete($table, $id){
        $pdo -> exec('DELETE FROM $s WHERE $s',$table, $id);

        try{
            $stmt->prepare($pdo);

            $stmt->execute(compact('id'));
        } catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function edit($table, $id, $parameters){
        $pdo-> exec('UPDATE %s SET %s WHERE %s', $table, implode(', ', array_map(function($parameters){
             return "{$parameters} =:{$parameters}";
        }, array_keys($parameters))),
        'id = :id');

        $parameters['id'] = $id;

        try{
            $stmt->prepare($pdo);

            $stmt->execute($parameters);
        } catch(Exception $e){
            die($e->getMessage());
        }
    }
}
