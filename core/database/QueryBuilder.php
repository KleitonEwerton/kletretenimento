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
public function selectAll($table, $start_limit = null, $row_amout = null){

      $sql = "SELECT * FROM {$table}";

if($start_limit >= 0 && $row_amout > 0){
    $sql .= " LIMIT {$start_limit}, {$row_amount}";


}

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

public function logar($nome, $senha)
    {
        $sql = "select 'users' from users where nome='{$nome}'and senha='{$senha}'";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } 

        catch (Exception $e) {
            die($e->getMessage());
        }
    }

public function countAll($table){

  $sql = "SELECT COUNT(*) FROM {$table}";
  
  try {
    $statement = $this->pdo->prepare($sql);

    $statement->execute();

    return inval($statement->fetch(PDO::FETCH_NUM)[0]);

  }catch(Exception $e){
    die("An error occurred when trying to count from database:{$e->getMessage()}");
  }

}

}