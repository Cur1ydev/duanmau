<?php

namespace App\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $category;
    public function __construct()
    {
        $this->category = new Category();
    }
    public function home(){
        return $this->view('home');
    }

    public function test()
    {
        $category = $this->category->delete();
        dd($category);
        return $this->view('abc',compact('abc'));
    }
}
