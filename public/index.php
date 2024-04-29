<?php


require '../vendor/autoload.php';

use App\Utils\GenerateUtil;
use App\Bot\Bot;
use App\Bot\Message;
use App\Helper\DateTimeHelper;
use App\Router\Route;
use App\Utils\DotEnvUtil;
use Dompdf\Dompdf;
use TelegramBot\Api\Types\Inline\InlineKeyboardMarkup;

use App\Core\Maker\Make;
use App\Session\Session;

date_default_timezone_set('America/Sao_Paulo');
session_start();


$path = dirname(__FILE__, 2);


DotEnvUtil::loadEnv($path."/.env");

//header('Content-Type: application/json; charset=utf-8');


$route = new Route();

/*$bot = new Bot(BOT_TOKEN);

$keyboar = new InlineKeyboardMarkup([
    [
        ['text' => 'Acompanhar', 'url' => 'https://192.168.1.21:8000/service/123456']
    ]
    ]);

$msg = Message::sendMessage("123456", "Lucas", "Palio");

$bot->sendMessage(message: $msg, parseMode: null, disablePreview: false, replyToMessageId : null, replyMarkup: $keyboar);*/



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