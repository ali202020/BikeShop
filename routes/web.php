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

Route::get('/', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/bikes', function(){return view('bikes');});

Route::resource('/admin','Admin');



//Routing the product -for viewing all products-(Extras , Bikes , Accessories)
Route::get('/bikes','Product@bikesIndex')->name('bikes');
Route::get('/accessories','Product@accessoriesIndex')->name('accessories');
Route::get('/extras','Product@extrasIndex')->name('extras');


//Routing the product -for viewing single page product-(Extras , Bikes , Accessories)
Route::get('/bike/{$id}','Product@bikeShow')->name('bike');
Route::get('/accessory/{$id}','Product@accessoryShow')->name('accessory');
Route::get('/extra/{$id}','Product@extraShow')->name('extra');



//Redirecting the client to the single page when he/she clicks on the (buy or view)
//Route::get('');
Route::get('/d',function(){return view('single_item');});

