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
public function selectAll($table){

      $sql = "SELECT * FROM {$table}";

      try {
        $stnt = $this->pdo->prepare($sql);
        $stnt->execute();
        
        return $stnt->fetchAll(PDO::FETCH_CLASS);
}catch (Exception $e){

    die($e->getMEssage());
   }
  }
public function insert($table, $parameters){

$sql = sprintf(
    'INSERT INTO %s (%s) VALUES(%s)',
    $table, implode(', ',array_keys($parameters)),
     ':' . implode(', :',array_keys($parameters))
);
try {
    $stnt = $this->pdo->prepare($sql);
    $stnt->execute($parameters);
    
}catch (Exception $e){
die($e->getMEssage());
}

 }
public function delete($table, $id){

    $sql = sprintf(
        'DELETE FROM %s WHERE %s',
        $table,
        'id = :id'
    );
    try {
        $stnt = $this->pdo->prepare($sql);
        $stnt->execute(compact('id'));
        
    }catch (Exception $e){
    die($e->getMEssage());
    }
 }

 public function edit($table, $id, $parametros){

 $sql = sprintf(
     'UPDATE %s SET %s WHERE %s',
     $table,
     implode(', ', array_map(function($parametros){
        return "{$parametros} = :{$parametros}";
     }, array_keys($parametros))),
     'id =:id'
    );

    $parametros['id'] = $id;

    try {
        $stnt = $this->pdo->prepare($sql);
        $stnt->execute($parametros);
        
    }catch (Exception $e){
    die($e->getMEssage());
    }

}

}