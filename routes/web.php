<?php

use App\Controllers\HomeController;
use app\core\Router;
use app\core\View;

    // Router::get('/hello', function(){
    //     View::render("home");
    // });
    
    Router::get('/',([new HomeController, "index"]));//acctede al metodo index