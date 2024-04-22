<?php

namespace App\Model;

class Carro
{
    private $carroId;
    private $modelo;
    private $placa;
    private $cor;
    private $ano;
    private $marca;
    private $clienteId;
    private $idServico;
    private $dtDeletado;

    public function __construct()
    {
        
    }

    public function setCarroId(int $id) : void
    {
        $this->carroId = $id;
    }

    public function getCarroId() : int
    {
        return $this->carroId;
    }

    public function setModelo(string $modelo) : void
    {
        $this->modelo = $modelo;
    }

    public function getModelo() : string
    {
        return $this->modelo;
    }

    public function setPlaca(string $placa) : void
    {
        $this->placa = $placa;
    }

    public function getPlaca() : string
    {
        return $this->placa;
    }

    public function setCor(string $cor) : void
    {
        $this->cor = $cor;
    }

    public function getCor() : string
    {
        return $this->cor;
    }

    public function setMarca(string $marca) : void
    {
        $this->marca = $marca;
    }

    public function getMarca() : string
    {
        return $this->marca;
    }

    public function setAno(int $ano) : void
    {
        $this->ano = $ano;
    }

    public function getAno() : int
    {
        return $this->ano;
    }

    public function setClienteId(int $clienteId) : void
    {
        $this->clienteId = $clienteId;
    }

    public function getClienteId() : int
    {
        return $this->clienteId;
    }

    public function setIdServico(int $idServico) : void
    {
        $this->idServico = $idServico; 
    }

    public function getIdServico() : int
    {
        return $this->idServico;
    }

    public function setDtDeletado(string $dtDeletado) : void
    {
        $this->dtDeletado = $dtDeletado;
    }

    public function getDtDeletado() : string
    {
        return $this->dtDeletado;
    } 
}