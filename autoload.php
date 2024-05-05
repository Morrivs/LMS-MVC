<?php
    foreach(glob("../core/*.php") as $filename){
        Require $filename;
    }

    foreach(glob("../config/*.php") as $filename){
        Require $filename;
    }

    $app = new App();
    $app -> run();