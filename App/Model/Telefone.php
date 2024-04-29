<?php

namespace App\Model;

class Telefone
{
    private $telefone;
    private $tipo;
    private $isTelegram;
    private $isWpp;
    private $idCliente;

    public function __construct(bool $isWpp, bool $isTelegram)
    {
        $this->isWpp = $isWpp;
        $this->isTelegram = $isTelegram;
    }

    public function setTipo(string $tipo)
    {
        $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getTelefone() : string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone) : void
    {
        $this->telefone = $telefone;
    }

    public function isWpp() : bool 
    {
        return $this->isWpp;
    }

    public function isTelegram() : bool 
    {
        return $this->isTelegram;
    }

    public function setClienteId(int $idCliente)
    {
        $this->idCliente = $idCliente;
    }

    public function getClienteId()
    {
        return $this->idCliente;
    }

} 