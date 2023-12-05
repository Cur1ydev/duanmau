<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Product;
use App\Traits\Middleware;
use mysql_xdevapi\Statement;

class DashboardController extends Controller
{
    use Middleware;
    private $model;

    public function __construct()
    {
        static::checkLogin();
        $this->model = new Product();
    }

    public function dashboard()
    {
        return $this->view('admin.dashboard');
    }
}