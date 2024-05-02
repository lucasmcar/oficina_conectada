<?php

namespace App\Dao;

use App\Connection\Connection;
use App\Model\Oficina;

class OficinaDao
{

    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();   
    }

    public function selectDataToReport()
    {
        $sql = "
            SELECT 
                o.nome, o.email, o.telefone,
                count(c.nome) 
            FROM 
                oficina o 
            INNER JOIN 
                oficina_cliente oc
            ON
                oc.idoficina = o.idoficina
            INNER JOIN
                cliente c
            ON
                oc.idcliente = c.idcliente";
    }

    public function oficinaAuth(Oficina $model)
    {
        $sql = "SELECT idoficina, nome, email, nridentificacao FROM oficina WHERE email = :email AND nridentificacao = :nridentificacao";
        $this->connection->prepare($sql);
        $this->connection->bind(':email', $model->getEmail());
        $this->connection->bind(':nridentificacao', $model->getNrIdentificacao());
        return $this->connection->one();
    }
} 