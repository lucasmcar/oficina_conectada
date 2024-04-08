<?php

namespace App\Model;

class Cliente
{
    private $idCliente;
    private $nome;
    private $email;
    private $telefone;
    private $carros;

    public function __construct()
    {
        $this->carros = [];
    }

    public function setIdCliente(int $id)
    {
        $this->idCliente = $id;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function addCarro(Carro $carro)
    {
        $this->carros[] = $carro; 
    }

    public function getCarro()
    {
        return $this->carros;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;
    }
} 