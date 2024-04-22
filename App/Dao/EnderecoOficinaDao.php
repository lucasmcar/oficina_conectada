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
}