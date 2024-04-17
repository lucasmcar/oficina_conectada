<?php

namespace App\Model;

class OficinaCliente
{
    private $idOficina;
    private $idCliente;

    public function __construct(int $idOficina, int $idCliente)
    {
        $this->idOficina = $idOficina;
        $this->idCliente = $idCliente;
    }

    public function getIdOficina() : int 
    {
        return $this->idOficina;
    }

    public function getIdCliente() : int
    {
        return $this->idCliente;
    } 
}