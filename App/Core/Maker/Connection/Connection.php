<?php

namespace App\Core\Maker\Connection;

use App\Connection\Connection as ConnectionConnection;

class Connection
{
    private $connection;

    public function __construct(ConnectionConnection $connection)
    {
        $this->connection = $connection;
    }

    public function getDbInfo(string $dbname)
    {
        $sql = "SELECT table_name FROM information_schema.tables WHERE table_schema = :dbname";
        $this->connection->prepare($sql);
        $this->connection->bind(':dbname', $dbname);
        return $this->connection->rs();
    }
}