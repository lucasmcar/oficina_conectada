<?php

namespace App\Model;

class ServicoEtapa
{

    private $idServicoEtapa;
    private $dtInicio;
    private $dtConclusao;
    private $idEtapa;
    private $idStatusEtapa;
    private $idServico;

    public function __construct()
    {

    }

    public function setIdServicoEtapa(int $idServicoEtapa) : void
    {
        $this->idServicoEtapa = $idServicoEtapa;
    }

    public function getIdServicoEtapa() : int 
    {
        return $this->idServicoEtapa;
    }

    public function setDtInicio(string $dtInicio) : void
    {
        $this->dtInicio = $dtInicio;
    }

    public function getDtInicio() : string
    {
        return $this->dtInicio;
    }

    public function setDtConclusao(string $dtConclusao) : void
    {
        $this->dtConclusao = $dtConclusao;
    } 

    public function getDtConclusao() : string
    {
        return $this->dtConclusao;
    }

    public function setIdEtapa(int $idEtapa) : void
    {
        $this->idEtapa = $idEtapa;
    }

    public function getIdEtapa() : int
    {
        return $this->idEtapa;
    } 

    public function setIdStatusEtapa(int $idStatusEtapa) : void
    {
        $this->idStatusEtapa = $idStatusEtapa;
    }

    public function getIdStatusEtapa() : int
    {
        return $this->idStatusEtapa;
    }
    
    public function setIdServico(int $idServico) : void
    {
        $this->idServico = $idServico;
    } 

    public function getIdServico() : int
    {
        return $this->idServico;
    } 


}