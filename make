<?php

require 'vendor/autoload.php';

use App\Connection\Connection as ConnectionConnection;
use App\Core\Maker\Connection\Connection;
use App\Core\Maker\Make;

$con = new ConnectionConnection();
$makeCon = new Connection($con);
print_r($makeCon->getDbInfo("db_oficina_conectada"));


(new Make($argv))->make()->run();