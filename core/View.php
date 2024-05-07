<?php

namespace App\core;
class View{
    public static function render($name, $data = []){
        $filename = '../app/views/'.$name.'.view.php';

        if(file_exists($filename)){
            if(!empty($data))
            extract($data);
            require $filename;
        }else{
            redirect('/miscellaneous/500');
        }
    }
}