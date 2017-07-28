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

Route::get('/', 'App\HomeController@index')->name('home');
Route::get('/home', 'App\HomeController@index')->name('home');
Route::get('/schedule', 'App\ScheduleController@index')->name('schedule');
Route::get('/workouts', 'App\WorkoutsController@index')->name('workouts');
Route::get('/pricing', 'App\PricingController@index')->name('pricing');
Route::get('/path', 'App\PathController@index')->name('path');
Route::get('/favourite', 'App\FavouriteController@index')->name('favourite');
Route::get('/shopping', 'App\ShoppingController@index')->name('shopping');
Route::get('/schedule/past', 'App\ScheduleController@pastschedule')->name('pastschedule');
Route::get('/schedule/{id}', 'App\ScheduleController@schedule_by_date')->name('schedule_by_date');

Route::get('/workouts/search', 'App\WorkoutsController@search')->name('workouts_search');

Route::get('/workout/{id}', 'App\WorkoutController@index')->name('workout');

Route::get('/activate/account', 'App\ActivateAccountController@index')->name('activate_account');

Route::post('/ajax/add_to_favourites', array('as' => 'ajaxaddtofavourites', 'uses' => 'App\WorkoutController@addToFavourites'));
Route::post('/ajax/remove_from_favourites', array('as' => 'ajaxremovefromfavourites', 'uses' => 'App\WorkoutController@removeFromFavourites'));
Route::post('/ajax/set_current_time_zone', array('as' => 'ajaxsetcurrenttimezone','uses' => 'App\HomeController@setCurrentTimeZone'));