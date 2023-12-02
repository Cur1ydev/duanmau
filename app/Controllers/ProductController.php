<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $model;
    private $category;

    public function __construct()
    {
        $this->model = new Product();
        $this->category = new Category();
    }

    public function detail($slug)
    {
        $product = $this->model->detailProduct($slug);
        $this->model->updateView(++$product->total_view, $slug);
        $images = $this->model->productGallery($slug);
        $semilarItem = $this->model->semilarItem($product->category_id);
        $comments = $this->model->comment($product->id);
        return $this->view('product-detail', compact('product', 'images','semilarItem','comments'));
    }
    public function search(){
        $categoryId = getRequest()->input('category');
        $category = $this->category->getById($categoryId);
        $keyword = getRequest()->input('keyword');
        $products = $this->model->search($categoryId,$keyword);
        return $this->view('search',compact('products','category','keyword'));
    }
    public function category($slug){
        $products = $this->model->getProductByCategory($slug);
        return $this->view('search',compact('products'));
    }
}