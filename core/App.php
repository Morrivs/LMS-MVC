<?php
    use app\core\Router;
    class App {
        public function run(){
            require "../routes/web.php";

            $path = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            //PARA SABER QUE TIPO DE METODO ES (POST GET PUT DELETE, )
            Router::router($_SERVER['REQUEST_METHOD'],$path);
        }
    }