<?php

namespace App\Model;

class Cliente
{
    private $idCliente;
    private $nome;
    private $email;
    private $telefone;
    private $carros;
    private $isTelegram;
    private $isWpp;

    public function __construct()
    {
        $this->carros = [];
        $this->isWpp = false;
        $this->isTelegram = false;
    }

    public function setIdCliente(int $idCliente) : void
    {
        $this->idCliente = $idCliente;
    }

    public function getIdCliente() : int 
    {
        return $this->idCliente;
    }

    public function addCarro(Carro $carro) : void
    {
        $this->carros[] = $carro; 
    }

    public function getCarro() : array | null
    {
        return $this->carros;
    }

    public function getNome() :string
    {
        return $this->nome;
    }

    public function setNome(string $nome) : void
    {
        $this->nome = $nome;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function getTelefone() : string
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone) : void
    {
        $this->telefone = $telefone;
    }

    public function isWpp(bool $isWpp) : bool 
    {
        $this->isWpp = $isWpp;
        return $this->isWpp;
    }

    public function isTelegram(bool $isTelegram) : bool 
    {
        $this->isTelegram = $isTelegram;
        return $this->isTelegram;
    }
} 