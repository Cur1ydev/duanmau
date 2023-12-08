<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Traits\Middleware;

class DashboardController extends Controller
{
    use Middleware;

    private $product, $category;

    public function __construct()
    {
        static::checkLogin();
        $this->product = new Product();
        $this->category = new Category();
    }

    public function dashboard()
    {
        $totalCategory = count($this->category->list());
        $totalProduct = count($this->product->list());
        $mediumPrice = $this->product->avaragePrice()->avg_price;
        $lowestPrice = $this->product->lowestPrice()->min_price;
        $highestPrice = $this->product->highestPrice()->max_price;
        $chartCategory = [];
        foreach ($this->category->list() as $category) {
            $chartCategory[] = $category->category_name;
            $chartProduct[] = count($this->product->countProductByCategory($category->id));
            $chartColor[] = $category->color;
        }
        return $this->view('admin.dashboard', compact('totalCategory', 'totalProduct', 'mediumPrice', 'lowestPrice', 'highestPrice', 'chartProduct', 'chartCategory', 'chartColor'));
    }
}