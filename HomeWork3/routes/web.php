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

Route::resource('product-type', 'ProductTypeController');
Route::resource('product-statuses', 'ProductStatusController');
Route::resource('shapes', 'ShapeController');
Route::resource('zones', 'ZoneController');
Route::resource('products', 'ProductController');

Route::get('/mail', function(){
    $user = \App\User::find(1);
    \Mail::to('test@test.com')->send(new \App\Mail\BasicSendMail($user));
    return view('welcome');
});
