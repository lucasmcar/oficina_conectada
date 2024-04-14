<?php

namespace App\Builder;

use App\Connection\Connection;
use Exception;

class QueryBuilder
{
    private $connection;
    private $table;
    private $joins = [];
    private $select = '*';
    private $where = [];
    private $orderBy;
    private $params = [];
    private $action;

    public function __construct(Connection $con, string $table)
    {
        if($con == null){
            throw new Exception("A database connection are needed");
        }
        if($table == ""){
            throw new Exception("Give a table name");
        }
        $this->connection = $con;
        $this->table = $table;
    }

    public function select(string $columns) : self
    {
        $this->select = $columns;
        $this->action = 'SELECT';
        return $this;
    }

    public function insert(array $data) : self 
    {
        $this->action = 'INSERT';
        $this->params = array_values($data);
        return $this;
    }

    public function update(array $data) : self
    {
        $this->action = 'UPDATE';
        $this->params = array_values($data);
        return $this;
    }

    public function delete()
    {
        $this->action = "DELETE";
        return $this;
    }

    public function where(string $column, $value, string $operator = '=') : self 
    {
        $this->where[] = "$column $operator";
        $this->params[] = $value;
        return $this;
    }

    public function orderBy(string $column, string $direction = 'ASC') : self
    {
        $this->orderBy = "ORDER BY $column $direction";
        return $this;
    }

    public function build() : array
    {
        $query = $this->action;
        $query .= ' * FROM ' . $this->table;

        switch($this->action){
            case "INSERT":
                $columns = implode(', ', array_keys($this->params));
                $placeholders = rtrim(str_repeat('?, ', count($this->params)), ', ');
                $query .= " ($columns) VALUES ($placeholders)";
                break;
            case "UPDATE":
                $set = implode('=?, ', array_keys($this->params)) . '=?';
                $query .= " SET $set";
                break;
            case "DELETE":

                break;
            default:
                if(!empty($this->where)){
                    $query .= " WHERE " . implode(' AND ', $this->where);
                }
            
                if (!empty($this->orderBy)) {
                    $query .= ' ' . $this->orderBy;
                }
                break;
        }

        return [$query, $this->params];
    }

    public function execute(): array {
        [$query, $params] = $this->build();
        $statement = $this->connection->prepare($query);
        $statement->execute($params);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function join(string $table, string $condition, string $type = 'INNER'): self {
        $this->joins[] = "$type JOIN $table ON $condition";
        return $this;
    }
}