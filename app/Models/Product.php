<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Product
{
    private $table = 'products';
    private $model;

    public function __construct()
    {
        $this->model = new BaseModel();
    }

    public function list()
    {
        try {
            $sql = "select $this->table.*,category.*  from $this->table inner join category on category.id = $this->table.category_id";
            return getAll($sql, $this->model) ;
        } catch (\Throwable $throwable) {
            return $throwable->getMessage();
        }
    }
    public function featureProduct(){
        try {
            $sql = "select $this->table.*,category.*  from $this->table inner join category on category.id = $this->table.category_id where $this->table.feature_product = 1";
            return getAll($sql, $this->model) ;
        } catch (\Throwable $throwable) {
            return $throwable->getMessage();
        }
    }
}