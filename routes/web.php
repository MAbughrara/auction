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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('about', function (){
    return view('about');
});
Route::get('users/{user}/password','UserController@showResetForm');
Route::post('users/{id}/password','UserController@changePassword')->name('changePassword');
Route::resource('users','UserController');
Route::resource('cars','CarController');
Route::resource('reviews','ReviewController');
Route::resource('Bids','BidController');