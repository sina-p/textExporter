<?php
namespace Exporter ;

class JsonExporter extends Exporter{
    protected $format = '.json' ;
    public function export(){
        // var_dump($this->data) ;
        $file_name = "json-file-" . rand(100,999) . $this->format ;
        $file_path = __DIR__ . "/files/$file_name" ;
        file_put_contents($file_path,json_encode($this->data)) ;
        echo "$file_name created successfully!!" ;
        // header('Refresh: 5');
    }
}

