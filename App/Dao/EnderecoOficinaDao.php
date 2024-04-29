<?php

namespace App\Dao;

use App\Connection\Connection;
use App\Model\EnderecoOficina;

class EnderecoOficinaDao
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function insert(EnderecoOficina $model)
    {
        $sql = "INSERT INTO endereco_oficina (logradouro, numero, bairro, cidade, uf, idoficina) VALUES (:logradouro, :numero, :bairro, :cidade, :uf, :idoficina)";
        $this->connection->prepare($sql);
        $this->connection->bind(':logradouro', $model->getLogradouro());
        $this->connection->bind(':numero', $model->getNumero());
        $this->connection->bind(':bairro', $model->getBairro());
        $this->connection->bind(':cidade', $model->getCidade());
        $this->connection->bind(':uf', $model->getUf());
        $this->connection->bind(':idofocina', $model->getIdOficina());
        return $this->connection->execute();
    }

    public function selectAll(string $orderBy = 'ASC') : array | null
    {
        $sql = "SELECT logradouro, numero, bairro, cidade, uf FROM endereco_oficina";
        if(isset($orderBy)){
            $sql .= " ORDER BY modelo ".$orderBy; 
        }
        $this->connection->query($sql);
        $resultado = $this->connection->rs();
        return $resultado;
    }

    public function selectAllWithInfo()
    {
        $sql = "SELECT 
            e.logradouro, 
            e.numero, 
            e.bairro, 
            e.cidade, 
            e.uf, 
            o.nome, 
            o.telefone, 
            o.email FROM endereco_oficina e INNER JOIN oficina o ON e.idoficina = o.idoficina";
        if(isset($orderBy)){
            $sql .= " ORDER BY modelo ".$orderBy; 
        }
        $this->connection->query($sql);
        $resultado = $this->connection->rs();
        return $resultado;
    }

    public function selectOneWithInfo(int $idOficina)
    {
        $sql = "SELECT 
            e.logradouro, 
            e.numero, 
            e.bairro, 
            e.cidade, 
            e.uf, 
            o.nome, 
            o.telefone, 
            o.email FROM endereco_oficina e INNER JOIN oficina o ON e.idoficina = o.idoficina WHERE idoficina = :idoficina";
        if(isset($orderBy)){
            $sql .= " ORDER BY modelo ".$orderBy; 
        }
        $this->connection->prepare($sql);
        $this->connection->bind(':idoficina', $idOficina);
        $resultado = $this->connection->one();
        return $resultado;
    }

    public function update(EnderecoOficina $model)
    {
        $sql = "UPDATE veiculo SET logradouro = :logradouro, numero = :numero, bairro = :bairro, cidade = : cidade, uf = :uf WHERE idoficina = :idoficina";
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
        $this->connection->bind(':idoficina', $model->getIdOficina());
        return $this->connection->execute();
    }

    public function delete(int $idOficina) : bool
    {
        $sql = "DELETE FROM endereco_oficina WHERE idoficina = :idoficina";
        $this->connection->prepare($sql);
        $this->connection->bind(':idoficina', $idOficina);
        return $this->connection->execute();
    }
}