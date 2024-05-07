<?php

namespace App\Controllers;

use App\core\Controller;
use App\core\View;
use App\Models\User;

    class HomeController extends Controller{
        public function index(){
            // echo "compai";
            // View::render("home");

            print_r(User::find(2));
        }

    }