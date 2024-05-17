<?php

namespace App\Controllers;

use App\core\Controller;
use App\core\View;
use App\Models\User;

    class HomeController extends Controller{
        public function index(){
            // echo "compai";
            // View::render("home");
            echo '<pre>';
            $user = new User();
            print_r($user->orderBy("id","DESC")->limit(2)->offset(1)->get());
        }
    }