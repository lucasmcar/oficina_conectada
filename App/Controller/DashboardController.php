<?php

namespace App\Controller;

use App\Repository\CarroRepository;
use App\Router\Controller\Action;
use App\Repository\ClienteRepository ;

class DashboardController extends Action
{
    public function clientDashboard()
    {
        $idCliente = $_SESSION['id'];

        $clientRepo = new ClienteRepository();

        $clienteInfo = $clientRepo->infoClient($idCliente);

        if($clienteInfo){
            $carroRepo = new CarroRepository();
            $carros = $carroRepo->getCarClientInfo($idCliente);
            $total = $carroRepo->totalVeiculos($idCliente);
            $this->view->infoCarrosCliente = $carros;
            $this->view->infoCliente = $clienteInfo;
            $this->view->nrCarros = $total;
        }

        $this->render('client/client_dashboard');
    }

    public function clientCar()
    {
        $this->render('client/client_car');
    }

    public function clientServices()
    {
        $this->render('client/client_services');
    }

    public function clientReport()
    {
        $this->render('client/client_report');
    }

    public function oficinaDashboard()
    {
        $this->render('oficina/oficina_dashboard');
    }

    public function info()
    {
        
        

        $this->render("client/client_dashboard");
    }
}