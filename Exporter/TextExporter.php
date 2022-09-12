<?php
namespace Exporter ;

class TextExporter extends Exporter{
    protected $format = '.txt' ;
    public function export(){
        // var_dump($this->data) ;
        $file_name = "text-file-" . rand(100,999) . $this->format ;
        $file_path = __DIR__ . "/files/$file_name" ;
        file_put_contents($file_path,"{$this->data['title']}\n{$this->data['content']}") ;
        echo "$file_name created successfully!!" ;
        // header('Refresh: 5');
    }
}

