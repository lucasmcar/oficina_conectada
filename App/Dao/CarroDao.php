<?php 

namespace App\Dao;

use App\Connection\Connection;
use App\Model\Carro;

class CarroDao
{
    private $connection;

    public function __construct()
    {   
        $this->connection = new Connection();
    }

    public function insert(Carro $model, int $clienteId)
    {
        $sql = "INSERT INTO carro (modelo, placa, cor, ano, marca_id, cliente_id) VALUES (:modelo, :placa, :cor, :ano, :marca, :cliente_id)";
        $this->connection->prepare($sql);
        $this->connection->bind(':modelo', $model->getModelo());
        $this->connection->bind(':placa', $model->getPlaca());
        $this->connection->bind(':cor', $model->getCor());
        $this->connection->bind(':ano', $model->getAno());
        $this->connection->bind(':marca', $model->getMarca());
        $this->connection->bind(':cliente_id', $clienteId);
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

    public function selectAll() : array | null
    {
        $sql = "SELECT * FROM veiculo";
        $this->connection->query($sql);
        $resultado = $this->connection->rs();
        return $resultado;

    }

    public function update(Carro $model)
    {
        $sql = "UPDATE veiculo SET modelo = :modelo, placa = :placa, cor = :cor, ano = :ano WHERE placa = :placa_id";
        $this->connection->prepare($sql);
        $this->connection->bind(':modelo', $model->getModelo());
        $this->connection->bind(':placa', $model->getPlaca());
        $this->connection->bind(':cor', $model->getCor());
        $this->connection->bind(':ano', $model->getAno());
        $this->connection->bind(':placa_id', $model->getPlaca());
        $this->connection->execute();
    }

    public function delete(string $placa)
    {
        $sql = "DELETE FROM veiculo WHERE placa = :placa";
        $this->connection->prepare($sql);
        $this->connection->bind(':placa', $placa);
        $this->connection->execute();
    }

    /**
     * 
     * @param int $id 
     * @return bool
     */
    public function softDelete(int $id)
    {
        $sql = "UPDATE veiculo SET deleted_at = NOW() WHERE id_carro = :id";
        $this->connection->prepare($sql);
        $this->connection->bind(':id', $id);
    }
}