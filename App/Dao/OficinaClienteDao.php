<?php

namespace App\Dao;

use App\Connection\Connection;
use App\Model\OficinaCliente;

class OficinaClienteDao
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function insert(OficinaCliente $model)
    {
        $sql = "INSERT INTO oficina_cliente (idoficina, idclinete) VALUES (:idoficina, :idcliente)";
        $this->connection->prepare($sql);
        $this->connection->bind(":idoficina", $model->getIdOficina());
        $this->connection->bind(":idcliente", $model->getIdCliente());
        return $this->connection->execute();
    }
}