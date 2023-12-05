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
            dd($throwable->getMessage());
        }

    }

    public function getUser($id)
    {
        try {
            $sql = "select * from $this->table where id= ?";
            return getOne($sql, $this->model, [$id]);
        } catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }
    public function store($username,$email,$password){
        try {
            $sql = "insert into  $this->table(username,email,password) values(?,?,?)";
            return insertTable($sql,$this->model,[$username,$email,$password]);
        }catch (\Throwable $throwable){
            dd($throwable->getMessage());
        }
    }
}