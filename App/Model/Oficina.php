<?php

namespace App\Model;

class Oficina
{
    private $idOficina;
    private $nome;
    private $email;
    private $telefone;
    private $isWpp;
    private $isTelegram;
    private $nrIdentificacao;

    public function __construct()
    {
        $this->isWpp = false;
        $this->isTelegram = false;    
    }

    public function getIdOficina() : int
    {
        return $this->idOficina;
    }

    public function setNome(string $nome) : void
    {
        $this->nome = $nome;
    } 

    public function getNome() : string
    {
        return $this->nome;
    }

    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    public function setTelefone(string $telefone) : void
    {
        $this->telefone = $telefone;
    }

    public function getTelefone() : string
    {
        return $this->telefone;
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

    public function setNrIdentificacao(string $nrIdentificacao) : void
    {
        $this->nrIdentificacao = $nrIdentificacao;
    }

    public function getNrIdentificacao() : string
    {
        return $this->nrIdentificacao;
    }
}