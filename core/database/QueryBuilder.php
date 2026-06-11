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

    public function selectOne($table, $id)
    {
        $sql = "select * from {$table}  where id = :id";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(['id' => $id]);

            return $stmt->fetchObject();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function verificaLogin($email, $senha)
    {
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

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (:%s)',
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


    public function countAll($table, $searchText, $searchColumn, $filtro)
    {
        $sql = "SELECT COUNT(*) AS total FROM {$table}";
        $parameters = [];
        $whereClauses = [];

        if ($searchColumn && $searchText) {
            $whereClauses[] = "($searchColumn[0] like :searchText or $searchColumn[1] like :searchText)";
            $parameters['searchText'] = '%' . $searchText . '%';
        }

        if ($filtro) {
            $whereClauses[] = "(type = :filtro)";
            $parameters['filtro'] = $filtro;
        }

        if (!empty($whereClauses)) {
            $sql .= " where " . implode(' and ', $whereClauses);
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetch(PDO::FETCH_ASSOC)['total'];
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function paginate($table, $limit, $offset, $searchText, $searchColumn, $filtro)
    {
        $parameters = [];
        $whereClauses = [];
        $whereSql = '';


        if ($searchColumn && $searchText) {
            $whereClauses[] = "($searchColumn[0] like :searchText or $searchColumn[1] like :searchText)";
            $parameters['searchText'] = '%' . $searchText . '%';
        }

        if ($filtro) {
            $whereClauses[] = "(type = :filtro)";
            $parameters['filtro'] = $filtro;
        }

        if (!empty($whereClauses)) {
            $whereSql = "WHERE " . implode(' and ', $whereClauses);
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
    public function existe($parameter)
    {
        $sql = sprintf('SELECT * FROM users WHERE email = :email');

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'email' => $parameter
            ]);
            $emailexistente = $stmt->fetch(PDO::FETCH_OBJ);
            if ($emailexistente) {
                return true;
            }
            return false;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function selectByForeignKey($table, $fkColumn, $fkValue)
    {
        $sql = "SELECT * FROM {$table} WHERE {$fkColumn} = :value";

        $stmt = $this->pdo->prepare($sql);

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'value' => $fkValue
            ]);

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function existPhotoPost($imageName) {
    $imagemPadrao = "/public/assets/post_featured_pics/padrao.png";

    if (empty($imageName)) {
        return $imagemPadrao;
    }
    
    $caminhoFisico = "public/assets/post_featured_pics/" . $imageName;

    if (file_exists($caminhoFisico)) {
        return "/" . $caminhoFisico; 
    }

    return $imagemPadrao;
    }
}
