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

Route::get('/workouts/search', 'WorkoutsController@search')->name('workouts_search');

Route::get('/workout/{id}', 'WorkoutController@index')->name('workout');

Route::post('ajax/add_to_favourites', array('as' => 'ajaxaddtofavourites', 'uses' => 'WorkoutController@addToFavourites'));
Route::post('ajax/remove_from_favourites', array('as' => 'ajaxremovefromfavourites', 'uses' => 'WorkoutController@removeFromFavourites'));
Route::post('ajax/set_current_time_zone', array('as' => 'ajaxsetcurrenttimezone','uses' => 'HomeController@setCurrentTimeZone'));

Route::post('ajax/workout_admin', 'WorkoutsController@admin_ajax_data');