<?php

namespace App\Dao;

use App\Connection\Connection;

class EtapaDao
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }
}