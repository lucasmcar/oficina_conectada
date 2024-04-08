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
        $sql = "INSERT INTO tb_carro (modelo, placa, cor, ano, marca_id, cliente_id) VALUES (:modelo, :placa, :cor, :ano, :marca_id, :cliente_id)";
        $this->connection->prepare($sql);
        $this->connection->bind(':modelo', $model->getModelo());
        $this->connection->bind(':placa', $model->getPlaca());
        $this->connection->bind(':cor', $model->getCor());
        $this->connection->bind(':ano', $model->getAno());
        $this->connection->bind(':marca_id', $model->getMarcaId());
        $this->connection->bind(':cliente_id', $clienteId);
        $this->connection->execute();
    }

    public function selectBy(int $id)
    {
        $sql = "SELECT * FROM teste WHERE id = :id";
        $this->connection->prepare($sql);
        $this->connection->bind(':id', $id);
        $resultado = $this->connection->one();
        return $resultado;
    }

    public function selectAll()
    {
        $sql = "SELECT * FROM teste";
        $this->connection->query($sql);
        $resultado = $this->connection->rs();
        return $resultado;

    }

    public function update(Carro $model)
    {
        $sql = "UPDATE teste SET modelo = :modelo, placa = :placa, cor = :cor, ano = :ano WHERE id_carro = :id";
        $this->connection->prepare($sql);
        $this->connection->bind(':modelo', $model->getModelo());
        $this->connection->bind(':placa', $model->getPlaca());
        $this->connection->bind(':cor', $model->getCor());
        $this->connection->bind(':ano', $model->getAno());
        $this->connection->bind(':id', $model->getCarroId());
        $this->connection->execute();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM tb_carro WHERE id_carro = :id";
        $this->connection->prepare($sql);
        $this->connection->bind(':id', $id);
        $this->connection->execute();
    }

    /**
     * 
     * @param int $id 
     * @return bool
     */
    public function softDelete(int $id)
    {
        $sql = "UPDATE teste SET deleted_at = NOW() WHERE id_carro = :id";
        $this->connection->prepare($sql);
        $this->connection->bind(':id', $id);
    }
}