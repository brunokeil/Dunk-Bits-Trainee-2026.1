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

    public function insert($table, $parameters)
    {

        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (:%s)',
            $table,
            implode(', ', array_keys($parameters)),
            implode(', :', array_keys($parameters)),
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($table, $id, $parameters)
    {
        $sql = sprintf(
            'UPDATE %s SET %s WHERE id = %s',
            $table,
            implode(', ', array_map(function ($param) {
                return $param . ' = :' . $param;
            }, array_keys($parameters))),
            $id
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE %s',
            $table,
            'id = :id'
        );
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function countAll($table, $searchText, $searchColumn)
    {
        $sql = "SELECT COUNT(*) AS total FROM {$table}";
        $parameters = [];

        if ($searchColumn && $searchText) {
            $sql .= " where $searchColumn[0] like :searchText or $searchColumn[1] like :searchText";
            $parameters['searchText'] = '%' . $searchText . '%';
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function paginate($table, $limit, $offset, $searchText, $searchColumn)
    {
        $parameters = [];

        $whereSql = '';


        if ($searchColumn && $searchText) {
            $whereSql = "where $searchColumn[0] like :searchText or $searchColumn[1] like :searchText";
            $parameters['searchText'] = '%' . $searchText . '%';
        }


        $sql = "SELECT * FROM {$table} {$whereSql} LIMIT {$limit} OFFSET {$offset}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function verificaLogin($email, $senha){
        $sql = sprintf('SELECT * FROM users WHERE email = :email AND password = :password');
        
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'email' => $email,
                'password' => $senha
            ]);

            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
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

