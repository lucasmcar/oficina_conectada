<?php

namespace App\Dao;

use App\Connection\Connection;

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
} 