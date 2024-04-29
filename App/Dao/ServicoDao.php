<?php

use App\Connection\Connection;
use App\Model\Servico;

class ServicoDao 
{

    private $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }


    public function insert(Servico $model, int $veiculoId) : bool
    {
        $sql = "INSERT INTO servico (ordem_servico, tipo, descricao, valor, dt_entrada, dt_previsao) VALUES (:os, :tipo, :descricao, :valor, NOW(), :dt_previsao)";
        $this->connection->prepare($sql);
        $this->connection->bind(':os', $model->getOs());
        $this->connection->bind(':tipo', $model->getTipo());
        $this->connection->bind(':descricao', $model->getDescricao());
        $this->connection->bind(':valor', $model->getValor());
        $this->connection->bind(':dt_previsao', $model->getDtPRevisao());
        return $this->connection->execute();
        
    }

    public function select() : array
    {
        $sql = "SELECT s.ordem_servico, s.tipo, s.descricao, s.valor, s.dt_entrada, s.dt_previsao FROM servico s";
        $this->connection->query($sql);
        $resultado = $this->connection->rs();
        return $resultado;
    }

    public function selectServicoPorCarro(string $placa) 
    {
        $sql = "SELECT s.ordem_servico, s.tipo, s.descricao, s.valor, s.dt_entrada, s.dt_entrega, v.modelo, v.marca, v.placa, v.cor FROM servico S ";
        $sql .= "INNER JOIN veiculo v ON s.id_veiculo = v.id_veiculo ";
        $sql .= "WHERE v.placa = :placa";
        $this->connection->prepare($sql);
        $this->connection->bind(':placa', $placa);
        return $this->connection->one();
    }

    public function update(Servico $model, int $os)
    {
        $sql = "UPDATE servico SET tipo = :tipo, descricao = :descricao, valor = :valor WHERE ordem_servico = :os";
        $this->connection->prepare($sql);
        if($model->getTipo() != ""){
            $this->connection->bind(":tipo", $model->getTipo());
        }

        if($model->getDescricao() != ""){
            $this->connection->bind(":descricao", $model->getDescricao());
        }

        if($model->getValor() != ""){
            $this->connection->bind(":valor", $model->getValor());
        }

        $this->connection->bind(":os", $model->getOs());
        
    }

    public function delete(int $idServico) : bool
    {
        $sql = "DELETE FROM servico WHERE idservico = :idservico";
        $this->connection->prepare($sql);
        $this->connection->bind(':idservico', $idServico);
        return $this->connection->execute();
    }


}