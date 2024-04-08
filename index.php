<?php
require 'vendor/autoload.php';
use App\Connection\Connection;
use App\Dao\CarroDao;
use App\Helper\JsonHelper;
use App\Model\Carro;
use App\Model\Cliente;


use Dompdf\Dompdf;

$con = new Connection();

$query = "SELECT * FROM teste";

$con->query($query);
$result = $con->rs();

$carroDao = new CarroDao();

$resultado = $carroDao->selectBy(1);
echo "<pre>";
print_r(JsonHelper::toJson($result));
echo "</pre>";
echo "<hr>";
echo "<pre>";
print_r(JsonHelper::toJson($resultado));
echo "</pre>";

$cliente = new Cliente();

$carro = new Carro();
$carro2 = new Carro();

$carro->setModelo("Corolla");
$carro2->setModelo("Siena");

$cliente->addCarro($carro);
$cliente->addCarro($carro2);

echo "<pre>";
var_dump($cliente);
echo "</pre>";



// instantiate and use the dompdf class
/*$dompdf = new Dompdf();

$html = "<html>\n";
$html .="<head><title>Teste</title></head>\n";
$html .="<body>\n";
$html .="<h1>Dados do usuário</h1>\n";
$html .="\t<p>Nome: ".htmlentities($resultado['nome'])."\n";
$html .="\t<p>Idade: ".htmlentities($resultado['idade'])."\n";
$html .="</body>\n";
$html .="</html>\n";

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();*/