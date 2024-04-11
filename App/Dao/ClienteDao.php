<?php

namespace App\Dao;

use App\Builder\QueryBuilder;
use App\Connection\Connection;

class ClienteDao
{

    private $connection;
    private $queryBuilder;

    public function __construct()
    {
        $this->connection = new Connection();    
        $this->queryBuilder = new QueryBuilder($this->connection, 'teste');    
    }

    public function insert(array $clienteData) : void
    {
        $this->queryBuilder->insert($clienteData)->execute();
    }

    public function selectAll()
    {
        return $this->queryBuilder->select('*')->execute();
    }

    public function selectAllBy()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}