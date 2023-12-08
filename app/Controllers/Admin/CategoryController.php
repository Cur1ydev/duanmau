<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Category;
use App\Traits\Middleware;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    use Middleware;
    private $model;

    public function __construct()
    {
        static::checkLogin();
        $this->model = new Category();

    }
    public function list()
    {
        $category = $this->model->list();
        return $this->view('admin.category.list', compact('category'));
    }

    public function store()
    {
        $name = getRequest()->name ?? null;
        $status = getRequest()->status ?? null;
        $description = getRequest()->description ?? null;
        $errors = [];
        if (getRequest()->isMethod('post')) {
            if (empty($name)) $errors[] = "Tên phải được nhập";
            if (empty($description)) $errors[] = "Mô tả phải được nhập";
            if (count($errors) == 0) {
                $this->model->store($name, Str::slug($name), $description, $status);
                redirect('/admin/category');
            }
        }
        return $this->view('admin.category.add', compact('name', 'status', 'description', 'errors'));
    }

    public function update($id)
    {
        $category = $this->model->getById($id);
        $name = $category->category_name ?? null;
        $status = $category->category_status ?? null;
        $description = $category->category_description ?? null;
        $errors = [];
        if (getRequest()->isMethod('post')) {
            $name = getRequest()->name ?? null;
            $status = getRequest()->status ?? null;
            $description = getRequest()->description ?? null;
            if (empty($name)) $errors[] = "Tên phải được nhập";
            if (empty($description)) $errors[] = "Mô tả phải được nhập";
            if (count($errors) == 0) {
                $this->model->update($name, Str::slug($name), $description, $status, $id);
                redirect('/admin/category');
            }
        }
        return $this->view('admin.category.update', compact('name', 'status', 'description', 'errors'));
    }

    public function delete($id)
    {
        $this->model->delete($id);
        redirect('/admin/category');
    }

}