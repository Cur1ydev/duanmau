<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Traits\Middleware;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use Middleware;

    private $model;
    private $category;

    public function __construct()
    {
        static::checkLogin();
        $this->model = new Product();
        $this->category = new Category();
    }

    public function list()
    {
        $products = $this->model->list();
        return $this->view('admin.products.list', compact('products'));
    }

    public function store()
    {
        $category = $this->category->list();
        $name = getRequest()->name ?? null;
        $categoryId = getRequest()->category_id ?? null;
        $price = getRequest()->price ?? null;
        $discount = getRequest()->discount ?? null;
        $img = getRequest()->image ?? null;
        $feature = getRequest()->feature ?? null;
        $status = getRequest()->status ?? null;
        $description = getRequest()->description ?? null;
        $expried = getRequest()->expried_at ?? null;
        $errors = [];
        if (getRequest()->isMethod('post')) {
            if (empty($name)) $errors[] = "Tên phải được nhập";
            if (empty($categoryId)) $errors[] = "Danh mục phải được chọn";
            if (empty($price)) $errors[] = "Giá phải được nhập";
            if (empty($img)) $errors[] = "Ảnh phải được nhập";
            if (empty($description)) $errors[] = "Mô tả phải được nhập";
            if (count($errors) == 0) {
                $this->model->store($categoryId, $name, Str::slug($name), $price, $discount, $img, 0, $feature, $description, date('Y-m-d H:i:s'), date("Y/m/d", strtotime($expried)), $status);
                redirect('/admin/product');
            }
        }
        return $this->view('admin.products.add', compact('category', 'name', 'categoryId', 'price', 'discount', 'img', 'feature', 'status', 'description', 'expried', 'errors'));
    }

    public function update($id)
    {
        $product = $this->model->getById($id);
        $category = $this->category->list();
        $name = $product->name ?? null;
        $categoryId = $product->category_id ?? null;
        $price = $product->price ?? null;
        $discount = $product->discount ?? null;
        $img = $product->image ?? null;
        $feature = $product->feature ?? null;
        $status = $product->status ?? null;
        $description = $product->description ?? null;
        $expried = date("m/d/Y", strtotime($product->expired_at)) ?? null;
        $errors = [];
        if (getRequest()->isMethod('post')) {
            $name = getRequest()->name ?? null;
            $categoryId = getRequest()->category_id ?? null;
            $price = getRequest()->price ?? null;
            $discount = getRequest()->discount ?? null;
            $img = getRequest()->image ?? null;
            $feature = getRequest()->feature ?? null;
            $status = getRequest()->status ?? null;
            $description = getRequest()->description ?? null;
            $expried = getRequest()->expried_at ?? null;
            if (empty($name)) $errors[] = "Tên phải được nhập";
            if (empty($categoryId)) $errors[] = "Danh mục phải được chọn";
            if (empty($price)) $errors[] = "Giá phải được nhập";
            if (empty($img)) $errors[] = "Ảnh phải được nhập";
            if (empty($description)) $errors[] = "Mô tả phải được nhập";
            if (count($errors) == 0) {
                $this->model->update($categoryId, $name, Str::slug($name), $price, $discount, $img, 0, $feature, $description, date('Y-m-d H:i:s'), date("Y/m/d", strtotime($expried)), $status, $id);
                redirect('/admin/product');
            }
        }
        return $this->view('admin.products.update', compact('category', 'name', 'categoryId', 'price', 'discount', 'img', 'feature', 'status', 'description', 'expried', 'errors'));
    }

    public function delete($id)
    {
        $this->model->delete($id);
        redirect('/admin/product');
    }
}