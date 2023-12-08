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
            $sql = "select $this->table.*,category.category_name  from $this->table inner join category on category.id = $this->table.category_id";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function featureProduct()
    {
        try {
            $sql = "select $this->table.*,category.*  from $this->table inner join category on category.id = $this->table.category_id where $this->table.feature_product = 1";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function detailProduct($slug)
    {
        try {
            $sql = "select * from $this->table inner join category on $this->table.category_id = category.id where $this->table.slug= '$slug'";
            return getOne($sql, $this->model);
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function productGallery($slug)
    {
        try {
            $sql = "select * from product_galleries inner join $this->table on product_galleries.product_id = $this->table.id where $this->table.slug = '$slug'";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function updateView($data, $slug)
    {
        try {
            $sql = "update $this->table set total_view = ? where slug= ?";
            return updateTable($sql, $this->model, [$data, $slug]);
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function semilarItem($categoryId)
    {
        try {
            $sql = "select * from $this->table where category_id = '$categoryId'";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function comment($productId)
    {
        try {
            $sql = "select * from comments inner join user on comments.user_id = user.id where comments.product_id = '$productId'";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function search($categoryId, $keyword)
    {
        try {
            $sql = "select * from $this->table inner join category on $this->table.category_id = category.id where $this->table.category_id = '$categoryId' and $this->table.name like '%$keyword%'";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function getProductByCategory($slug)
    {
        try {
            $sql = "select * from $this->table inner join category on $this->table.category_id = category.id where category.category_slug = '$slug'";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }
    public function mostView(){
        try {
            $sql = "select $this->table.*,category.*  from $this->table inner join category on category.id = $this->table.category_id order by $this->table.total_view desc";
            return getAll($sql, $this->model);
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function store($category_id, $name, $slug, $price, $discount, $image, $totalView, $feature, $description, $created_at, $expried_at, $status)
    {
        try {
            $sql = "insert into $this->table(category_id,name,slug,price,discount,image,total_view,feature_product,description,created_at,expired_at,status) values(?,?,?,?,?,?,?,?,?,?,?,?)";
            return insertTable($sql, $this->model, [$category_id, $name, $slug, $price, $discount, $image, $totalView, $feature, $description, $created_at, $expried_at, $status]);
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function getById($id)
    {
        try {
            $sql = "select * from $this->table where id= ?";
            return getOne($sql, $this->model, [$id]);
        } catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function update($category_id, $name, $slug, $price, $discount, $image, $totalView, $feature, $description, $created_at, $expried_at, $status, $id)
    {
        try {
            $sql = "update $this->table set category_id = ?,name = ?,slug = ?,price = ?,discount = ?,image = ?,total_view = ?,feature_product = ?,description = ?,created_at = ?,expired_at = ?,status = ? where id = ?";
            return updateTable($sql, $this->model, [$category_id, $name, $slug, $price, $discount, $image, $totalView, $feature, $description, $created_at, $expried_at, $status, $id]);
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

    public function lowestPrice()
    {
        try {
            $sql = "select min(price) as min_price from $this->table";
            return getOne($sql, $this->model);
        } catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }
    public function highestPrice()
    {
        try {
            $sql = "select max(price) as max_price from $this->table";
            return getOne($sql, $this->model);
        } catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }
    public function avaragePrice(){
        try {
            $sql = "select avg(price) as avg_price from $this->table";
            return getOne($sql, $this->model);
        } catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }
    public function countProductByCategory($id){
        try {
            $sql = "select * from $this->table where category_id = '$id'";
            return getAll($sql,$this->model);
        } catch (\Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }
}