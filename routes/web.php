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
        return view('admin.users', compact('users'));
    });
    Route::get('brands' , function (){
        $brands = \App\Brand::all();
        return view('admin.brands', compact('brands'));
    });
    Route::get('tables' , function (){
        return view('admin.tables');
    });
    Route::get('forms' , function (){
        return view('admin.forms');
    });
    Route::get('charts' , function (){
        return view('admin.charts');
    });
    Route::get('login' , function (){
        return view('admin.login');
    });

});



Route::get('users/{user}/password','UserController@showResetForm');
Route::post('users/{id}/password','UserController@changePassword')->name('changePassword');
Route::put('users/{id}/status', 'UserController@statusUpdate')->middleware('admin');
Route::resource('users','UserController');
Route::resource('cars','CarController');
Route::resource('reviews','ReviewController');
Route::resource('Bids','BidController');
Route::post('/bids/add/{car}','BidController@add');
Route::get('/bids/getLastBid/{car}','BidController@getLastBid');
Route::get('/bids/getLastBidTime/{car}','BidController@getLastBidTime');
Route::get('/bids/getLastBidder/{car}','BidController@getLastBidder');
Route::resource('brands','BrandController');

Route::post('/search','SearchController@search');
