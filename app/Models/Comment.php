<?php

namespace App\Models;

class Comment extends BaseModel
{
    private $table = "comments";
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

    public function store($comment, $userId, $productId, $parentId = 0)
    {
        try {
            $sql = "insert into $this->table(comment,user_id,product_id,parent_id,created_at) values(?,?,?,?,?)";
            return insertTable($sql, $this->model, [$comment, $userId, $productId, $parentId, date('Y-m-d H:i:s')]);
        } catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }
}