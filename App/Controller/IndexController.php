<?php

namespace App\Controller;

use App\Router\Controller\Action;

use App\Connection\Connection;
use App\Dao\CarroDao;
use App\Dao\ClienteDao;
use App\Helper\JsonHelper;
use App\Model\Carro;
use App\Model\Cliente;

class IndexController extends Action
{
    public function index()
    {
    
        //Renderizar tela
        /*$con = new Connection();
        $query = "SELECT * FROM teste";

        $con->query($query);
        $result = $con->rs();

        $carroDao = new CarroDao();*/
        $clienteDao = new ClienteDao();

        $resultado = $clienteDao->selectAll();

        //@$this->view->result = JsonHelper::toJson($resultado);


        //@$this->view->rs = JsonHelper::toJson($resultado);


        $this->render('index', 'index');
    }

    public function about()
    {
        $this->render('about', 'index');
    }

    public function contact()
    {
        $this->render('contato', 'index');
    }
}