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

    public function insert(Cliente $model) : void
    {
        $sql = "INSERT INTO cliente (nome, email, telefone, dt_cadastro, ehWpp, ehTelegram) VALUES (:nome, :email, :telefone, NOW(), :isWpp, :isTelegram)";
        $this->connection->prepare($sql);
        $this->connection->bind(':nome', $model->getNome());
        $this->connection->bind(':email', $model->getEmail());
        $this->connection->bind(':telefone', $model->getTelefone());
        $this->connection->bind(':isWpp', $model->isWpp());
        $this->connection->bind(':isTelegram', $model->isTelegram());
        
        $this->connection->execute();
    }

    public function selectAll()
    {
        $sql = "SELECT nome, email, telefone, ehWpp, ehTelegram FROM cliente";
        $this->connection->query($sql);
        $resultado = $this->connection->rs();
        return $resultado;
    }

    public function selectClientBy(Cliente $model)
    {
        $sql = "SELECT nome, email, telefone FROM cliente WHERE nome LIKE :nome OR email LIKE :email";
        $this->connection->prepare($sql);
        $this->connection->bind(":nome", "%".$model->getNome()."%");
        $this->connection->bind(":email", "%".$model->getEmail()."%");
        $this->connection->execute();
    }

    public function update(Cliente $model, int $idCliente)
    {
        $sql = "UPDATE cliente SET 
            nome = :nome, 
            telefone = :telefone,
            email = :email  
            ehWpp = :isWapp, 
            ehTelegram = :isTelegram, 
            WHERE idcliente = :idcliente";
        $this->connection->prepare($sql);
        if($model->getNome() != ""){
            $this->connection->bind(":nome", $model->getNome());
        }
        if($model->getTelefone() != ""){
            $this->connection->bind(":telefone", $model->getTelefone());
        }
        if($model->getEmail() != ""){
            $this->connection->bind(":email", $model->getEmail());
        }
        if($model->isWpp()){
            $this->connection->bind(":isWapp", $model->isWpp());
        }
        if($model->isTelegram()){
            $this->connection->bind(":isTelegram", $model->isTelegram());
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
}