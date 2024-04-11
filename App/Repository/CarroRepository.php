<?php

namespace App\Repository;

use App\Dao\CarroDao;
use App\Model\Carro;

class CarroRepository
{
    private $dao;

    public function __construct(CarroDao $dao)
    {
        $this->dao = $dao;
    }

    public function create(Carro $carro, int $idCliente)
    {
        $this->dao->insert($carro, $idCliente);
    }

    public function getBy(string $placa)
    {
        return $this->dao->selectByPlaca($placa);
    }

    public function getAll()
    {
        return $this->dao->selectAll();
    }

    public function update(int $id)
    {

    }

    public function destroy(int $id)
    {
        
    }
}