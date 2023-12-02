<?php

namespace App\Models;

class Category extends BaseModel
{
    private $table = 'category';
    private $model;

    public function __construct()
    {
        $this->model = new BaseModel();
    }

    public function list()
    {
        try {
            $sql = "select * from " . $this->table;
            return getAll($sql, $this->model);
        } catch (\Throwable $throwable) {
            return $throwable->getMessage();
        }
    }
    public function getById($id){
        try {
            $sql = "select * from $this->table where id= '$id'";
            return getOne($sql,$this->model);
        }catch (\Throwable $throwable) {
            return $throwable->getMessage();
        }
    }
}