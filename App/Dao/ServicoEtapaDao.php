<?php 

namespace App\Dao;

use App\Connection\Connection;
use App\Model\ServicoEtapa;

class ServicoEtapaDao
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function insert(ServicoEtapa $model)
    {
        /*$sql = "INSERT INTO endereco_oficina (dt_inicio, , bairro, cidade, uf, idcliente) VALUES (:logradouro, :numero, :bairro, :cidade, :uf, :idcliente)";
        $this->connection->prepare($sql);
        $this->connection->bind(':logradouro', $model->getDtInicio());
        $this->connection->bind(':numero', $model->getNumero());
        $this->connection->bind(':bairro', $model->getBairro());
        $this->connection->bind(':cidade', $model->getCidade());
        $this->connection->bind(':uf', $model->getUf());
        $this->connection->bind(':idcliente', $model->getIdCliente());
        return $this->connection->execute();*/
    }

    
} 