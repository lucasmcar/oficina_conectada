<?php 

namespace App\Dao;

use App\Connection\Connection;

class ServicoEtapaDao
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function insert()
    {
        
    }
} 