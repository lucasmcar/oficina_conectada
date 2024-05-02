<?php

namespace App\Controller;

use App\Model\RelatorioCliente;
use Dompdf\Dompdf;

class ReportClientController
{
    public function report()
    {
        $pdf = new Dompdf();
        $report = new RelatorioCliente();
        $html = $report->getData();
        $pdf->loadHtml($html);

         // Renderizar o PDF
         $pdf->render();

         // Saída do PDF (enviar para o navegador)
         $pdf->stream(date('Y-m-d H:i:s').'.pdf');
    }
}