<?php

use App\Controllers\HomeController;
use app\core\Router;
use app\core\View;

    Router::get('/hello', function(){
        View::render("dashboard/dashboard");
    });

    Router::get('/dashboard/profile', function(){
        View::render("dashboard/profile");
    });