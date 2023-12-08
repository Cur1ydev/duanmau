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

    public function store($username, $email, $password, $role = 1)
    {
        try {
            $sql = "insert into  $this->table(username,email,password,role_id) values(?,?,?,?)";
            return insertTable($sql, $this->model, [$username, $email, $password, $role]);
        }catch (\Throwable $throwable){
            dd($throwable->getMessage());
        }
    }

    public function update($username, $email, $password, $role, $id)
    {
        try {
            $sql = "update $this->table set username = ?,email = ?,password = ?,role_id = ? where id= ?";
            return updateTable($sql, $this->model, [$username, $email, $password, $role, $id]);
        } catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $sql = "delete from $this->table where id= ?";
            return deleteTable($sql, $this->model, $id);
        } catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }
}