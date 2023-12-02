<?php

namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    private $category;
    private $product;

    public function __construct()
    {
        $this->category = new Category();
        $this->product  = new Product();
    }
    public function home(){
        $products = $this->product->list();
        $category = $this->category->list();
        $featureProducts = $this->product->featureProduct();
        $mostView = $this->product->mostView();
        return $this->view('home',compact('products','category','featureProducts','mostView'));
    }

//    public function test()
//    {
//        $category = $this->category->all();
//        dd($category);
//        return $this->view('abc',compact('abc'));
//    }
}
