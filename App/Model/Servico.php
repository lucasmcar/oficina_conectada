<?php

namespace App\Model;

class Servico
{
    private $idServico;
    private $tipo;
    private $descricao; 
    private $valor;
    private $dtEntrada;
    private $dtEntrega;
    
    public function __construct()
    {
        
    }

    public function setIdServico(int $idServico) : void
    {
        $this->idServico = $idServico;
    }

    public function getIdServico() : int
    {
        return $this->idServico;
    }

    public function setTipo(string $tipo) : void
    {
        $this->tipo = $tipo;
    }

    public function getTipo() : string
    {
        return $this->tipo;
    }

    public function setDescricao(string $descricao) : void
    {
        $this->descricao = $descricao;
    }

    public function getDescricao() : string
    {
        return $this->descricao;
    }

    public function setValor(float $valor)
    {
        $this->valor = $valor;
    }

    public function getValor() : float
    {
        return $this->valor ;
    }

    public function setDtEntrada(string $dtEntrada) :void
    {
        $this->dtEntrada = $dtEntrada;
    }

    public function getDtEntrada() : string
    {
        return $this->dtEntrada;
    }

    public function setDtEntrega(string $dtEntrega) : void
    {
        $this->dtEntrada = $dtEntrega;
    }

    public function getDtEntrega() : string
    {
        return $this->dtEntrega;
    }


}