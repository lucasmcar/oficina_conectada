<?php

namespace App\Model;

class StatusEtapa
{
    private $idStatusEtapa;
    private $descricao;
    private $idEtapa;

    public function __construct()
    {
        
    }

    public function setIdStatusEtapa(int $idStatusEtapa) : void
    {
        $this->idStatusEtapa = $idStatusEtapa;
    } 

    public function getIdStatusEtapa() : int
    {
        return $this->idStatusEtapa;
    }

    public function setDescricao(string $descricao) : void
    {
        $this->descricao = $descricao;
    }

    public function getDescricao() : string
    {
        return $this->descricao;
    }

    public function setIdEtpa(int $idEtapa)
    {
        $this->idEtapa = $idEtapa;
    }

    public function getIdEtapa()
    {
        return $this->idEtapa;
    }

} 