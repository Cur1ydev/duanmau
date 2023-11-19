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

    public function all()
    {
        try {
            return getAll($this->table, $this->model);
        } catch (\Throwable $throwable) {
            return $throwable->getMessage();
        }
    }

    public function add()
    {
        try {
            $sql = "insert into $this->table(name,slug,description,parent_id,status) values(?,?,?,?,?)";
            $value = ['Lợi Xoăn', 'loi-xoan', 'đây là lợi xoăn', 1, 1];
            return insertTable($sql, $this->model, $value);
        } catch (\Throwable $throwable) {
            return $throwable->getMessage();
        }
    }

    public function update()
    {
        try {
            $sql = "update $this->table set name=? where id=?";
            $value = ["Lợi đẹp try",3];
            return updateTable($sql, $this->model, $value);
        } catch (\Throwable $throwable) {
            return $throwable->getMessage();
        }
    }
    public function delete()
    {
        try {
//            $sql = "delete from $this->table where id=?";
//            $value = [3];
//            return updateTable($sql, $this->model, $value);
            return getOne($this->table,$this->model,2);
        } catch (\Throwable $throwable) {
            return $throwable->getMessage();
        }
    }
}