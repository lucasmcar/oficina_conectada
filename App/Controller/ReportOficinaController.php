<?php

namespace App\Controller;

use App\Model\RelatorioOficina;
use App\Router\Controller\Action;
use Dompdf\Dompdf;

class ReportOficinaController extends Action
{
    public function report()
    {
        $pdf = new Dompdf();
        $report = new RelatorioOficina();
        $html = $report->getData();
        $pdf->loadHtml($html);

         // Renderizar o PDF
         $pdf->render();

         // Saída do PDF (enviar para o navegador)
         $pdf->stream(date('Y-m-d H:i:s').'.pdf');
        
    }
}