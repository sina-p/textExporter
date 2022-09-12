<?php
namespace Exporter ;

use Dompdf\Dompdf as PDF;

class PdfExporter extends Exporter{
    protected $format = '.pdf' ;
    public function export(){
        // var_dump($this->data) ;
        $file_name = "pdf-file-" . rand(100,999) . $this->format ;
        $file_path = __DIR__ . "/files/$file_name" ;

        # the Dompdf package
        $pdf = new PDF() ;
        $pdf->loadHtml("{$this->data['title']}<br><br>{$this->data['content']}") ;
        $pdf->setPaper('A5', 'portrait');
        $pdf->render() ;
        $Output = $pdf->output() ;

        file_put_contents($file_path,$Output) ;
        echo "$file_name created successfully!!" ;
        // header('Refresh: 5');
    }
}

