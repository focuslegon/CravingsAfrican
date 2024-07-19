<?php
namespace App\Exports;

use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ViewExport;
use Barryvdh\DomPDF\Facade\Pdf;
use App;

class ExportService
{
    public $type;
    public $name;
    public $view;
    public $data;

    public function __construct($type,$name,$view,array $data)
    {
        $this->type = $type;
        $this->name = $name;
        $this->view = $view;
        $this->data = $data;


    }

    public function export()
    {
        $export = $this->type;
        $name = $this->name;
        $view = $this->view;
        $data = $this->data;
        $data['export'] = true;

          if ($export=='excel') {
            $data['export_type'] = 'excel';
            $exportData = View::make($view, $data);
            return $exportData;
            // if (class_exists(Excel::class)) {
            //     return Excel::download(new ViewExport($exportData), $name . '.xlsx');
            // } else {
            //     return ' Excel package not installed, install  Maatwebsite\Excel via composer.';
            // }
    
           }elseif ($export == 'csv') {

            // $data['list_contents'] = $data['sale_transactions'];
            // $data['display_field'] = [];
            // // CSV export logic
            // return Excel::download(new CsvExport($data), $name . '.csv');
            return null;

            } else{
            $data['export_type'] = 'pdf';
            $html = view($view, $data)->render();
            return $html;

            // return response()->streamDownload(function () use($html) {
            //     $pdf = App::make('dompdf.wrapper');
            //     $pdf->loadHTML($html);
            //     echo $pdf->stream();
            // }, $name.'.pdf');
           }
    }


    public function exportWeb()
    {
        if ($this->type=='excel') {
            $this->data['export_type'] = 'excel';
            $exportData = View::make($this->view, $this->data);
            return Excel::download(new ViewExport($exportData), $this->name . '.xlsx');
        }else{

            $this->data['export_type'] = 'pdf';
            $pdf = Pdf::loadView($this->view, $this->data);
            return $pdf->download($this->name.'.pdf');

        }
    }


}
