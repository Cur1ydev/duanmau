<?php

namespace App\Models;

use Throwable;

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
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            return $throwable->getMessage();
        }
    }

    public function featureProduct()
    {
        try {
            $sql = "select $this->table.*,category.*  from $this->table inner join category on category.id = $this->table.category_id where $this->table.feature_product = 1";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            return $throwable->getMessage();
        }
    }

    public function detailProduct($slug)
    {
        try {
            $sql = "select * from $this->table inner join category on $this->table.category_id = category.id where $this->table.slug= '$slug'";
            return getOne($sql, $this->model);
        } catch (Throwable $throwable) {
            return $throwable->getMessage();
        }
    }

    public function productGallery($slug)
    {
        try {
            $sql = "select * from product_galleries inner join $this->table on product_galleries.product_id = $this->table.id where $this->table.slug = '$slug'";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            return $throwable->getMessage();
        }
    }

    public function updateView($data, $slug)
    {
        try {
            $sql = "update $this->table set total_view = ? where slug= ?";
            return updateTable($sql, $this->model, [$data, $slug]);
        } catch (Throwable $throwable) {
            return $throwable->getMessage();
        }
    }

    public function semilarItem($categoryId)
    {
        try {
            $sql = "select * from $this->table where category_id = '$categoryId'";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            return $throwable->getMessage();
        }
    }

    public function comment($productId)
    {
        try {
            $sql = "select * from comments inner join user on comments.user_id = user.id where comments.product_id = '$productId'";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            return $throwable->getMessage();
        }
    }

    public function search($categoryId, $keyword)
    {
        try {
            $sql = "select * from $this->table inner join category on $this->table.category_id = category.id where $this->table.category_id = '$categoryId' and $this->table.name like '%$keyword%'";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            return $throwable->getMessage();
        }
    }

    public function getProductByCategory($slug)
    {
        try {
            $sql = "select * from $this->table inner join category on $this->table.category_id = category.id where category.category_slug = '$slug'";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            return $throwable->getMessage();
        }
    }
    public function mostView(){
        try {
            $sql = "select $this->table.*,category.*  from $this->table inner join category on category.id = $this->table.category_id order by $this->table.total_view desc";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            return $throwable->getMessage();
        }
    }
}