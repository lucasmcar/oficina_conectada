<?php

namespace App\Model;

use App\Utils\GenerateUtil;

class Cliente
{
    private $idCliente;
    private $nome;
    private $email;
    private $carros;
    private $telefones;
    private $dtDesde;
    private $nrIdentificacao;
    private $dtDeletado;

    public function __construct()
    {
        $this->carros = [];
        $this->telefones = [];
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

    public function addTelefones(Telefone $telefone)
    {
        $this->telefones[] = $telefone;
    }

    public function getTelefone()
    {
        return $this->telefones;
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

    
    public function setDtDeletado(string $dtDeletado) : void
    {
        $this->dtDeletado = $dtDeletado;
    }

    public function getDtDeletado() : string
    {
        return $this->dtDeletado;
    }
    
    public function setNrIdentificacao(string $nrIdentificacao)
    {
        $this->nrIdentificacao = intval($nrIdentificacao);
    }

    public function getNrIdentificacao()
    {
        return $this->nrIdentificacao;
    }

    public function setDtDeste(string $dtDesde)
    {
        $this->dtDesde = $dtDesde;
    }

    public function getDtDesde()
    {
        return $this->dtDesde;
    }
} 