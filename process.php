<?php

include "autoload.php" ;


if ($_SERVER["REQUEST_METHOD"] !== "POST" ) {
    // echo "Not Submited!" ;
    return ;
}

[$title,$content,$format] = [$_POST['title'],$_POST['content'],$_POST['format']] ;
// echo "Submited with OK!" ;


$whitelist = ['Text','Pdf','Json'] ;
if (!in_array($format,$whitelist)) {
    die("Invalid format!!") ;
    return ;
}


$className = "Exporter\\{$format}Exporter" ;
$exporter = new $className(['title'=>$title,'content'=>$content]) ;
$exporter->export() ;

header('Refresh: 7');

              # Bad example
// switch ($format){
//     case 'text':
//         BadExporter::export_to_text($title,$content) ;
//         break;
//     case 'pdf':
//         BadExporter::export_to_pdf($title,$content) ;
//         break;
//     case 'json':
//         BadExporter::export_to_json($title,$content) ;
//         break;
// }
