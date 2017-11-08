<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->get('/api/china/city', 'ChinaController@city');
    $router->get('/api/china/district', 'ChinaController@district');
    $router->get('/china/cascading-select', 'ChinaController@cascading');
    $router->resource('doctors', DoctorController::class);
    $router->resource('experts', ExpertController::class);
    $router->resource('casehistory', CaseHistoryController::class);
    $router->resource('orders',OrderController::class);
    $router->resource('orthodontics',OrthodonicCaseController::class);
});

