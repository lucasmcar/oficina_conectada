<?php

namespace App\Dao;


use App\Connection\Connection;
use App\Connection\ConnectionInstance;
use App\Model\Cliente;

class ClienteDao
{
    private $connection;
 
    public function __construct()
    {
        $this->connection = ConnectionInstance::getInstance();      
    }

    public function insert(Cliente $model) : int
    {
        $sql = "INSERT INTO cliente (nome, email, dtcadastro, nridentificacao, dtdesde) VALUES (:nome, :email,  NOW(), :nridentificacao, :dtdesde)";
        $this->connection->prepare($sql);
        $this->connection->bind(':nome', $model->getNome());
        $this->connection->bind(':email', $model->getEmail());
        $this->connection->bind(':nridentificacao', $model->getNrIdentificacao());
        $this->connection->bind(':dtdesde', $model->getDtDesde());
        if($this->connection->execute()){
            return $this->connection->lastInsertId();
        }
    }

    public function selectClientInfo(int $idCliente)
    {
        $sql = "SELECT nome, email, dtcadastro, dtdesde, nridentificacao FROM cliente WHERE idcliente = :idcliente";
        $this->connection->prepare($sql);
        $this->connection->bind(':idcliente', $idCliente);
        $clienteInfos = $this->connection->one();
        return $clienteInfos;
    }

    public function selectAll()
    {
        $sql = "SELECT nome, email, nridentificacao, dtdesde FROM cliente";
        $this->connection->query($sql);
        $resultado = $this->connection->rs();
        return $resultado;
    }

    public function selectClientBy(Cliente $model)
    {
        $sql = "SELECT nome, email, dtdesde FROM cliente WHERE nome LIKE :nome OR email LIKE :email";
        $this->connection->prepare($sql);
        $this->connection->bind(":nome", "%".$model->getNome()."%");
        $this->connection->bind(":email", "%".$model->getEmail()."%");
        return $this->connection->execute();
    }

    public function update(Cliente $model, int $idCliente)
    {
        $sql = "UPDATE cliente SET 
            nome = :nome, 
            email = :email  
            WHERE idcliente = :idcliente";
        $this->connection->prepare($sql);
        if($model->getNome() != ""){
            $this->connection->bind(":nome", $model->getNome());
        }
        if($model->getEmail() != ""){
            $this->connection->bind(":email", $model->getEmail());
        }
        
        $this->connection->bind("idcliente", $idCliente);
        return $this->connection->execute();
    }

    public function delete(int $idCliente)
    {
        $sql = "DELETE FROM cliente WHERE idcliente = :idcliente";
        $this->connection->prepare($sql);
        $this->connection->bind(':idcliente', $idCliente);
        return $this->connection->execute();
    }

    public function softDelete(Cliente $model)
    {
        $sql = "UPDATE cliente SET dt_deletado = :dtleletado WHERE idcliente = :idcliente";
        $this->connection->prepare($sql);
        $this->connection->bind(":dtdeletado", $model->getDtDeletado());
        $this->connection->bind(":idcliente", $model->getIdCliente());
        return $this->connection->execute();
    }

    public function getTotalClientes()
    {
        $sql = "SELECT COUNT(*) FROM cliente";
        $this->connection->query($sql);
        $resultado = $this->connection->rs();
        return $resultado;

    }

    public function clientAuth(Cliente $model)
    {
        $sql = "SELECT idcliente, nome, email, nridentificacao FROM cliente WHERE email = :email AND nridentificacao = :nridentificacao";
        $this->connection->prepare($sql);
        $this->connection->bind(':email', $model->getEmail());
        $this->connection->bind(':nridentificacao', $model->getNrIdentificacao());
        return $this->connection->one();
    }
}