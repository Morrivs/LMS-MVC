<?php
namespace App\core;

use App\core\DB;
USE PDO;

abstract class Model{
    protected static $table;
    protected static $primaryKey = 'id';
    protected static $wheres = [];
    protected static $orderBys = [];
    protected static $groupBy = [];
    protected static $limit = [];
    protected static $offset = [];
    //obtiene todos los datos de la tabla
    public static function all(){
        $query = "SELECT * FROM " . static::$table; 
        return DB::query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id){
        $query = "SELECT * FROM " . static::$table . " WHERE ". static::$primaryKey . " =:id "; 
        return DB::query($query,['id'=>$id])->fetch(PDO::FETCH_ASSOC);
    }

    public static function paginate($perPage = 10, $page = 1){
        $offset = ($page - 1) * $perPage;
        $query = "SELECT * FROM " .static::$table. " LIMIT {$perPage} OFFSET {$offset}";
        
        $result = DB::query($query);        
        
        $countQuery = "SELECT COUNT(*) as total FROM ".static::$table;
        echo $countQuery;
        //accede a la columna total de la BD, y lo devuelve en un array asociativo
        $total = DB::query($countQuery)->fetch(PDO::FETCH_ASSOC)['total'];

        $lastPage = ceil($total/ $perPage);
        
        return [           
            'data'=>$result,
            'current_page' => $page,
            'per_page' => $perPage,
            'total' => $total,
            'last_page' => $lastPage
        ];
    }

    public function where($column, $operator, $value) {
        static::$wheres[]=[
            'column'=> $column,
            'operator' => $operator,
            'value' => $value
        ];
        return $this; //eso permite concadenar metodos
    }

    public function orderBy($column, $direction) {
        static::$orderBys[]=[
            'column'=> $column,
            'direction' => $direction
        ];
        return $this;
    }

    public function groupBy($column) {
        static::$groupBy = $column;
        return $this;
    }

    public function limit($limit) {
        static::$limit = $limit;
        return $this;
    }

    public function offset($offset) {
        static::$offset = $offset;
        return $this;
    }

    public function get() {
        $query = "SELECT * FROM " . static::$table;
        if(!empty(static::$wheres)){
            $query.=" WHERE ";
            foreach(static::$wheres as $index => $where){
                if($index !=0){
                    $query.=" AND "; 
                }
                $query .= $where['column'] . " " . $where['operator'] . ' :' . $where['column'];
            }
        }
        if(!empty(static::$orderBys)){
            $query.=" ORDER BY ";
            foreach(static::$orderBys as $index => $orderBy){
                if($index !=0){
                    $query.=", "; 
                }
                $query.= $orderBy['column'] . " " . $orderBy['direction'];
            }
        }

        if(!empty(static::$groupBy)){
            $query.=" GROUP BY ". static::$groupBy;
        }

        if(!empty(static::$limit)){
            $query.=" LIMIT ". static::$limit;
        }

        if(!empty(static::$offset)){
            $query.=" OFFSET ". static::$offset;
        }

        echo $query;

        $stmnt = DB::query($query, $this->getWhereParameters());
        return $stmnt->fetchAll(PDO::FETCH_ASSOC);
    }

        protected function getWhereParameters(){
            $parameters=[];
            foreach (static::$wheres as $where){
                $parameters[$where['column']] = $where['value'];
            }
            return $parameters;
        }
     }
