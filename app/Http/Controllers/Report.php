<?php

namespace App\Http\Controllers;

use App\GravarCompras;
use function Composer\Autoload\includeFile;
use ZanySoft\LaravelPDF\PDF;

class Report extends Controller
{
    protected $report;

    public function __construct(GravarCompras $report)
    {
        $this->report = $report;
    }

    public function index()
    {
        return view('reports.index', [
            'listarcoCompras' => $this->listarComprasGravadas(),
        ]);
    }

    public function listarComprasGravadas()
    {
        return \App\GravarCompras::all();
    }

    public function printReport($id)
    {

        $convertPDF = \App\GravarCompras::findOrfail($id);
        $html = "";
        $pdf = new PDF();
        $pdf->loadView('pdf.document',['print' => $convertPDF]);
        return $pdf->Stream('document.pdf');

    }

    public function saveReport($id)
    {

    }
}
