<?php
namespace App\core;

use App\core\DB;
USE PDO;

abstract class Model{
    protected static $table;
    protected static $primaryKey = 'id';

    //obtiene todos los datos de la tabla
    public static function all(){
        $query = "SELECT * FROM " . static::$table; 
        return DB::query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id){
        $query = "SELECT * FROM " . static::$table . " WHERE ". static::$primaryKey . " =:id "; 
        return DB::query($query,['id'=>$id])->fetch(PDO::FETCH_ASSOC);
    }
}