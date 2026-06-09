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

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insert($table, $parameters){
        $sql = sprintf('INSERT INTO %s (%s) VALUES (:%s)',
        $table,
        implode(', ', array_keys($parameters)), 
        implode(', :', array_keys($parameters))
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function existe($parameter){
        $sql = sprintf('SELECT * FROM users WHERE email = :email');

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'email' => $parameter
                ]);
            $emailexistente = $stmt->fetch(PDO::FETCH_OBJ);
            if($emailexistente){
                return true;
            }
            return false;
            
            

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
