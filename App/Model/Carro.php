<?php

namespace App\Model;

class Carro
{
    private $carroId;
    private $modelo;
    private $placa;
    private $cor;
    private $ano;
    private $marcaId;
    private $clienteId;

    public function __construct()
    {
        
    }

    public function setCarroId(int $id)
    {
        $this->carroId = $id;
    }

    public function getCarroId()
    {
        return $this->carroId;
    }

    public function setModelo(string $modelo)
    {
        $this->modelo = $modelo;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setPlaca(string $placa)
    {
        $this->placa = $placa;
    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function setCor(string $cor)
    {
        $this->cor = $cor;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setMarcaId(string $marca)
    {
        $this->marcaId = $marca;
    }

    public function getMarcaId()
    {
        return $this->marcaId;
    }

    public function setAno(int $ano)
    {
        $this->ano = $ano;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function setClienteId(int $clienteId)
    {
        $this->clienteId = $clienteId;
    }

    public function getClienteId()
    {
        return $this->clienteId;
    }
}