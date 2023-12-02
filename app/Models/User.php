<?php

namespace App\Models;

class User
{
    private $model;
    private $table = 'user';

    public function __construct()
    {
        $this->model = new BaseModel();
    }

    public function list()
    {
        try {
            $sql = "select * from $this->table";
            return getAll($sql, $this->model);
        } catch (\Throwable $throwable) {
            return $throwable->getMessage();
        }

    }

    public function getUser($id)
    {
        try {
            $sql = "select * from $this->table where id= ?";
            return getOne($sql, $this->model, [$id]);
        } catch (\Throwable $throwable) {
            return $throwable->getMessage();
        }
    }
}