<?php
use Cake\Core\Plugin;// 追加
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

//追加
Router::scope(
    '/articles',
    ['controller' =>'Articles'],
    function ($routes){
        $routes->connect('/tagged/*',['action' => 'tags']);
    }
);

//編集
Router::scope('/', function ($routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);

    //追加
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    
    $routes->fallbacks();
});
Plugin::routes();