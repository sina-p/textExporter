<?php

spl_autoload_register(function($class){
    $class_file = __DIR__ . "/$class.php" ;
    if(file_exists($class_file) & is_readable($class_file)){
        require_once $class_file ;
        require __DIR__ . '/vendor/autoload.php';
    }else{
        die("Class Load Error ......") ;
    }

}) ;

