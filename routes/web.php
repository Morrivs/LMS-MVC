<?php
    use app\core\Router;

    // Router::get('/jello',function(){
    //     echo "pelotudo";
    // });

    Router::get('/',function(){
        echo "welcome from home";
    });