<?php

namespace App\Dao;

use App\Connection\ConnectionInstance;
use App\Model\EnderecoCliente;

class EnderecoClienteDao
{
    private $connection;
 
    public function __construct()
    {
        $this->connection = ConnectionInstance::getInstance();      
    }

    public function insert(EnderecoCliente $model) : int | false
    {
        $sql = "INSERT INTO endereco_oficina (logradouro, numero, bairro, cidade, uf, idcliente) VALUES (:logradouro, :numero, :bairro, :cidade, :uf, :idcliente)";
        $this->connection->prepare($sql);
        $this->connection->bind(':logradouro', $model->getLogradouro());
        $this->connection->bind(':numero', $model->getNumero());
        $this->connection->bind(':bairro', $model->getBairro());
        $this->connection->bind(':cidade', $model->getCidade());
        $this->connection->bind(':uf', $model->getUf());
        $this->connection->bind(':idcliente', $model->getIdCliente());
        return $this->connection->execute();
    }

    public function selectAll(string $orderBy = 'ASC') : array | null
    {
        $sql = "SELECT logradouro, numero, bairro, cidade, uf FROM endereco_cliente";
        if(isset($orderBy)){
            $sql .= " ORDER BY modelo ".$orderBy; 
        }
        $this->connection->query($sql);
        $resultado = $this->connection->rs();
        return $resultado;
    }

    public function selectByCliente(int $idCliente) : array
    {
        $sql = "SELECT logradouro, numero, bairro, cidade, uf FROM endereco_cliente WHERE idcliente = :idcliente";
        $this->connection->prepare($sql);
        $this->connection->bind(':idcliente', $idCliente);
        $resultado = $this->connection->one();
        return $resultado;
    }

    public function update(EnderecoCliente $model)
    {
        $sql = "UPDATE veiculo SET logradouro = :logradouro, numero = :numero, bairro = :bairro, cidade = : cidade, uf = :uf WHERE idcliente = :idcliente";
        $this->connection->prepare($sql);
        if($model->getLogradouro() != ""){
            $this->connection->bind(':logradouro', $model->getLogradouro());
        }
        if($model->getNumero() != ""){
            $this->connection->bind(':numero', $model->getNumero());
        }
        if($model->getBairro() != ""){
            $this->connection->bind(':bairro', $model->getBairro());
        }
        if($model->getCidade() != ""){
            $this->connection->bind(':cidade', $model->getCidade());
        }
        if($model->getUf() != ""){
            $this->connection->bind(':uf', $model->getUf());
        }
        $this->connection->bind(':idcliente', $model->getIdCliente());
        return $this->connection->execute();
    }

    public function delete(int $idCliente) : bool
    {
        $sql = "DELETE FROM endereco_cliente WHERE idcliente = :idcliente";
        $this->connection->prepare($sql);
        $this->connection->bind(':idcliente', $idCliente);
        return $this->connection->execute();
    }
}