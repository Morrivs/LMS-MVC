<?php
    foreach(glob("../core/*.php") as $filename){
        Require $filename;
    }

    foreach(glob("../config/*.php") as $filename){
        Require $filename;
    }

    //usa el namespace para convertirlo en una direccion y encontrar el archivo
    spl_autoload_register(function($class){
        $file ="../".str_replace('\\','/', $class).'.php';

        if(file_exists($file)){
            require $file;
        }
    });

    $app = new App();
    $app -> run();