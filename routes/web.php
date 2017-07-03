<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/schedule', 'ScheduleController@index')->name('schedule');
Route::get('/workouts', 'WorkoutsController@index')->name('workouts');
Route::get('/path', 'PathController@index')->name('path');
Route::get('/favourite', 'FavouriteController@index')->name('favourite');
Route::get('/shopping', 'ShoppingController@index')->name('shopping');
Route::get('/schedule/past', 'ScheduleController@pastschedule')->name('pastschedule');
Route::get('/schedule/{id}', 'ScheduleController@schedule_by_date')->name('schedule_by_date');

Route::get('/workout/{id}', 'WorkoutController@index')->name('workout');
Route::post('ajax/set_current_time_zone', array('as' => 'ajaxsetcurrenttimezone','uses' => 'HomeController@setCurrentTimeZone'));