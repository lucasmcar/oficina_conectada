<?php 

namespace App\Dao;

use App\Connection\Connection;

class StatusEtapa
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }
}