<?php

namespace App\Dao;


use App\Connection\Connection;
use App\Model\Cliente;

class ClienteDao
{
    private $connection;
 
    public function __construct()
    {
        $this->connection = new Connection();      
    }

    public function insert(Cliente $model) : void
    {
        $sql = "INSERT INTO cliente (nome, email, telefone) VALUES (:nome, :email, :telefone)";
        $this->connection->prepare($sql);
        $this->connection->bind(':nome', $model->getNome());
        $this->connection->bind(':email', $model->getEmail());
        $this->connection->bind(':telefone', $model->getTelefone());
        
        $this->connection->execute();
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM cliente";
        $this->connection->query($sql);
        $resultado = $this->connection->rs();
        return $resultado;
    }

    public function selectCLientBy()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}