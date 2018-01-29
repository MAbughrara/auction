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
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', function () {
            return view('admin.index');
    });
    Route::get('users' , function (){
        $users = \App\User::all()->slice(1);
//        dd($users);
        return view('admin.pages.users', compact('users'));
    });
    Route::get('brands' , function (){
        $brands = \App\Brand::all();
        return view('admin.pages.brands', compact('brands'));
    });

});



Route::get('users/{user}/password','UserController@showResetForm');
Route::post('users/{id}/password','UserController@changePassword')->name('changePassword');
Route::resource('users','UserController');
Route::resource('cars','CarController');
Route::resource('reviews','ReviewController');
Route::resource('Bids','BidController');
Route::resource('brands','BrandController');
Route::post('/bids/add/{car}','BidController@add');
