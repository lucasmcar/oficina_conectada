<?php

namespace App\Repository;

use App\Dao\CarroDao;
use App\Model\Carro;

class CarroRepository
{
    private $dao;

    public function __construct()
    {
        $this->dao = new CarroDao();
    }

    public function create(Carro $carro) :int
    {
        return $this->dao->insert($carro);
    }

    public function getBy(string $placa)
    {
        return $this->dao->selectByPlaca($placa);
    }

    public function getAll()
    {
        return $this->dao->selectAll();
    }

    public function getAllInfo()
    {
        return $this->dao->selectAllInfoCarro();
    }

    public function update(Carro $model)
    {
        return $this->dao->update($model);
    }

    public function destroy(int $id)
    {
        
    }
}