<?php

namespace App\Controller;

use App\Router\Controller\Action;

use App\Connection\Connection;
use App\Dao\CarroDao;
use App\Helper\JsonHelper;
use App\Model\Carro;
use App\Model\Cliente;

class IndexController extends Action
{
    public function index()
    {
    
        //Renderizar tela
        $con = new Connection();
        $query = "SELECT * FROM teste";

        $con->query($query);
        $result = $con->rs();

        $carroDao = new CarroDao();

        $resultado = $carroDao->selectByPlaca(1);

        @$this->view->result = JsonHelper::toJson($result);


        @$this->view->rs = JsonHelper::toJson($resultado);


        $cliente = new Cliente();

        $carro = new Carro();
        $carro2 = new Carro();

        $carro->setModelo("Corolla");
        $carro2->setModelo("Siena");

        $cliente->addCarro($carro);
        $cliente->addCarro($carro2);


        $this->render('index');
    }

    public function about()
    {
        $this->render('about', 'index');
    }
}