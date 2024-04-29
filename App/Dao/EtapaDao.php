<?php

namespace App\Dao;

use App\Connection\Connection;
use App\Model\Etapa;

class EtapaDao
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function insert(Etapa $model)
    {
        $sql = "INSERT INTO servico (etapa) VALUES (:etapa)";
        $this->connection->prepare($sql);
        $this->connection->bind(':etapa', $model->getEtapa());
        
        return $this->connection->execute();
    }

}