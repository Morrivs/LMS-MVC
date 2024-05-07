<?php

namespace App\core;

use PDO;

    class DB{

        private static $pdo; 

        private static function connect(){
            $string = "mysql:host=localhost; port=3306; dbname=lms_mvc";
            self::$pdo = new PDO($string, "root", "");
        }

        public static function query($query, $data=[]){
            self::connect();

            $stmnt = self::$pdo->prepare($query);
            $stmnt->execute($data);

            self::$pdo = null;

            return $stmnt;
        }
    }