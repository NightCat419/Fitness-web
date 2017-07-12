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
    $router->resource('relations', RelationController::class);
    $router->resource('optional_requirements', OptionalRequirementController::class);
    $router->resource('schedules', ScheduleController::class);

    $router->post('api/create_schedules', 'ScheduleController@createSchedules');
    $router->get('api/show_create_schedules', 'ScheduleController@showCreateSchedules');

    $router->get('api/target_areas', 'ApiController@target_areas');
    $router->get('api/movements', 'ApiController@movements');
});
