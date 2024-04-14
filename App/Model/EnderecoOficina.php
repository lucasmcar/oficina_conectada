<?php

namespace App\Model;

class EnderecoOficina
{
    private $idEndereco;
    private $logradouro;
    private $numero;
    private $bairro;
    private $cidade;
    private $uf;
    private $idOficina;

    public function __construct()
    {
        
    }

    public function setIdEndereco(int $idEndereco) : void
    {
        $this->idEndereco = $idEndereco;
    }

    public function getIdEndereco() : int
    {
        return $this->idEndereco;
    }

    public function setLogradouro(string $logradouro) : void
    {
        $this->logradouro = $logradouro;
    }

    public function getLogradouro() : string
    {
        return $this->logradouro;
    }

    public function setNumero(string $numero) : void 
    {
        $this->numero = $numero;
    }

    public function getNumero() : string
    {
        return $this->numero;
    }

    public function setBairro(string $bairro) : void
    {
        $this->bairro = $bairro;
    }

    public function getBairro() : string
    {
        return $this->bairro;
    }

    public function setCidade(string $cidade) : void
    {
        $this->cidade = $cidade;
    }

    public function getCidade() : string
    {
        return $this->cidade;
    } 

    public function setUf(string $uf) : void
    {
        $this->uf = $uf;
    } 

    public function getUf() : string
    {
        return $this->uf;
    }

    public function setIdOficina(int $idOficina) : void
    {
        $this->idOficina = $idOficina;
    }

    public function getIdOficina() : int
    {
        return $this->idOficina;
    }
}