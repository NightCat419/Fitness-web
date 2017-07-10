<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    
    $router->resource('users', UserController::class);
    $router->resource('movements', MovementController::class);
    $router->resource('target_areas', TargetAreaController::class);
    $router->resource('workouts', WorkoutController::class);
});
