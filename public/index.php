<?php
require '../vendor/autoload.php';

/*use App\Bot\Bot;
use App\Bot\Message;
use App\Helper\DateTimeHelper;
use App\Connection\Connection;
use App\Dao\CarroDao;
use App\Helper\JsonHelper;
use App\Model\Carro;
use App\Model\Cliente;
use App\Router\Route;
use Dompdf\Dompdf;
use TelegramBot\Api\Types\Inline\InlineKeyboardMarkup;


header('Content-Type: application/json; charset=utf-8');


$route = new Route();

$bot = new Bot(BOT_TOKEN);

$keyboar = new InlineKeyboardMarkup([
    [
        ['text' => 'Acompanhar', 'url' => 'https://192.168.1.21:8000/service/123456']
    ]
    ]);

$msg = Message::sendMessage("123456", "Lucas", "Palio");

$bot->sendMessage(message: $msg, parseMode: null, disablePreview: false, replyToMessageId : null, replyMarkup: $keyboar);

print_r(MARCAS);

print_r(DateTimeHelper::toDatabaseFormat("24/01/2024 22:15:30"));*/

/*$con = new Connection();

$query = "SELECT * FROM teste";

$con->query($query);
$result = $con->rs();

$carroDao = new CarroDao();

$resultado = $carroDao->selectByPlaca(1234564);
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
echo "</pre>";*/



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