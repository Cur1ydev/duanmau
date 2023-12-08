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
            dd($throwable->getMessage());
        }
    }
    public function getById($id){
        try {
            $sql = "select * from $this->table where id= '$id'";
            return getOne($sql,$this->model);
        }catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function store($name, $slug, $description, $status)
    {
        try {
            $sql = "insert into $this->table(category_name,category_slug,category_description,category_status,color) values(?,?,?,?,CONCAT('#', SUBSTRING(MD5(RAND()), 1, 6)))";
            return insertTable($sql, $this->model, [$name, $slug, $description, $status]);
        } catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function update($name, $slug, $description, $status, $id)
    {
        try {
            $sql = "update $this->table set category_name = ?,category_slug=?,category_description=?,category_status=? where id= ?";
            return updateTable($sql, $this->model, [$name, $slug, $description, $status, $id]);
        } catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }
    public function delete($id){
        try {
            $sql = "delete from $this->table where id= ?";
            return deleteTable($sql,$this->model,$id);
        } catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }
}