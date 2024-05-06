<?php

use App\Controllers\HomeController;
use app\core\Router;

    // Router::get('/jello',function(){
    //     echo "pelotudo";
    // });

    Router::get('/',([new HomeController, "index"]));//acctede al metodo index