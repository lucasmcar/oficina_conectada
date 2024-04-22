<?php 

namespace App\Dao;


use App\Connection\ConnectionInstance;
use App\Model\Carro;


class CarroDao
{
    private $connection;

    public function __construct()
    {   
        $this->connection = ConnectionInstance::getInstance();
    }

    public function insert(Carro $model, int $clienteId)
    {
        $sql = "INSERT INTO carro (modelo, placa, cor, ano, marca, dt_cadastro, idcliente) VALUES (:modelo, :placa, :cor, :ano, :marca, NOW(), :cliente_id)";
        $this->connection->prepare($sql);
        $this->connection->bind(':modelo', $model->getModelo());
        $this->connection->bind(':placa', $model->getPlaca());
        $this->connection->bind(':cor', $model->getCor());
        $this->connection->bind(':ano', $model->getAno());
        $this->connection->bind(':marca', $model->getMarca());
        $this->connection->bind(':cliente_id', $model->getClienteId());
        $this->connection->execute();
    }

    public function selectByPlaca(int $placa) : array
    {
        $sql = "SELECT * FROM veiculo WHERE placa = :placa";
        $this->connection->prepare($sql);
        $this->connection->bind(':placa', $placa);
        $resultado = $this->connection->one();
        return $resultado;
    }

    public function selectAll(string $orderBy = "ASC") : array | null
    {
        $sql = "SELECT modelo, placa, cor, ano, marca FROM veiculo";
        if(isset($orderBy)){
            $sql .= " ORDER BY modelo ".$orderBy; 
        }
        $this->connection->query($sql);
        $resultado = $this->connection->rs();
        return $resultado;

    }

    public function selectAllInfoCarro() : array | null
    {
        $sql = "SELECT v.modelo, v.placa, v.cor, v.ano, v.marca, c.nome FROM veiculo INNER JOIN cliente c ON v.idcliente = c.idcliente";
        $this->connection->prepare($sql);
        $resultado = $this->connection->one();
        return $resultado;
    } 

    public function update(Carro $model) : bool
    {
        $sql = "UPDATE veiculo SET modelo = :modelo, placa = :placa, cor = :cor, ano = :ano WHERE placa = :placa_id";
        $this->connection->prepare($sql);
        if($model->getModelo() != ""){
            $this->connection->bind(':modelo', $model->getModelo());
        }
        if($model->getPlaca() != ""){
            $this->connection->bind(':placa', $model->getPlaca());
        }
        if($model->getCor() != ""){
            $this->connection->bind(':cor', $model->getCor());
        }
        if($model->getAno() != ""){
            $this->connection->bind(':ano', $model->getAno());
        }
        if($model->getPlaca() != ""){
            $this->connection->bind(':placa_id', $model->getPlaca());
        }
        return $this->connection->execute();
    }

    public function delete(string $placa) : bool
    {
        $sql = "DELETE FROM veiculo WHERE placa = :placa";
        $this->connection->prepare($sql);
        $this->connection->bind(':placa', $placa);
        return $this->connection->execute();
    }

    public function softDelete(Carro $model) : bool
    {
        $sql = "UPDATE veiculo SET dt_deletado = :dtdeletado WHERE placa = :placa";
        $this->connection->prepare($sql);
        $this->connection->bind(':placa', $model->getPlaca());
        $this->connection->bind(':dtdeletado', $model->getDtDeletado());
        return $this->connection->execute();
    }
}