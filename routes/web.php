<?php

use App\Controllers\HomeController;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\RouteCollector;

$route = new RouteCollector();
$url = !isset($_GET['url']) ? '/' : $_GET['url'];

$route->get('/',[HomeController::class,'home']);
$route->get('test',[HomeController::class,'test']);
$route->group(['prefix' => 'admin'],function ($rt){
    $rt->get('/',function (){
        return 'day la trang admin';
    });

});

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Dispatcher($route->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
// Print out the value returned from the dispatched function
echo $response;
