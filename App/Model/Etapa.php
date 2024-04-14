<?php

namespace App\Model;

class Etapa
{
    private $idEtapa;
    private $etapa;

    public function setIdEtapa(int $etapaId) : void
    {
        $this->idEtapa = $etapaId;
    } 

    public function getIdEtapa() : int
    {
        return $this->idEtapa; 
    }

    public function setEtapa(string $etapa) : void
    {
        $this->etapa = $etapa;
    }

    public function getEtapa() : string
    {
        return $this->etapa;
    }
}