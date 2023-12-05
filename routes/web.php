<?php

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\UserController;
use App\Controllers\CommentController;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;
use App\Controllers\Admin\DashboardController;
use App\Controllers\Admin\ProductController as AdminProduct;
use App\Controllers\Admin\CategoryController as AdminCategory;

$route = new RouteCollector();
$url = !isset($_GET['url']) ? '/' : $_GET['url'];

$route->get('/',[HomeController::class,'home']);
$route->get('search', [ProductController::class, 'search']);
$route->get('product/{slug}', [ProductController::class, 'detail']);
$route->get('my-account', [UserController::class, 'getUser']);
$route->get('login',[UserController::class,'login']);
$route->post('login',[UserController::class,'login']);
$route->get('register',[UserController::class,'register']);
$route->post('register',[UserController::class,'register']);
$route->get('logout',function (){
    unset($_SESSION['username']);
    unset($_SESSION['id']);
    redirect('/login');
});
$route->post('comment',[CommentController::class,'comment']);
$route->get('category/{slug}',[ProductController::class,'category']);
$route->group(['prefix' => 'admin'],function ($route){
    $route->get('/',[DashboardController::class,'dashboard']);
    $route->group(['prefix' => 'product'],function ($route){
        $route->get('/',[AdminProduct::class,'list']);
        $route->get('store',[AdminProduct::class,'store']);
        $route->post('store',[AdminProduct::class,'store']);
        $route->get('update/{id}',[AdminProduct::class,'update']);
        $route->post('update/{id}',[AdminProduct::class,'update']);
        $route->get('delete/{id}',[AdminProduct::class,'delete']);
    });
    $route->group(['prefix' => 'category'],function ($route){
        $route->get('/',[AdminCategory::class,'list']);
        $route->get('store',[AdminCategory::class,'store']);
        $route->post('store',[AdminCategory::class,'store']);
        $route->get('update/{id}',[AdminCategory::class,'update']);
        $route->post('update/{id}',[AdminCategory::class,'update']);
        $route->get('delete/{id}',[AdminCategory::class,'delete']);
    });
    $route->get('logout',function (){
        unset($_SESSION['admin']);
        unset($_SESSION['id_admin']);
        redirect('/login');
    });

});

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Dispatcher($route->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
// Print out the value returned from the dispatched function
echo $response;
