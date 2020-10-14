<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('landing');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::match(["GET", "POST"], "/register", function(){
    return redirect('/login');
})->name('register');
Route::match(["GET"], "/login", function(){
    return redirect('/404');
})->name('login');
route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');


Route::group(['prefix'=>'admin','namespace' => 'Admin','middleware'=>['auth']], function() {
    Route::get('/', 'LandingController@index')->name('landing');
    Route::group(['prefix'=>'user'], function(){
        route::get('/', 'UserController@index')->name('user.index');
        route::get('/data', 'UserController@data')->name('user.data');
        route::get('/create', 'UserController@create')->name('user.create');
        route::post('/store', 'UserController@store')->name('user.store');
        route::get('/edit/{id}', 'UserController@edit')->name('user.edit');
        route::put('/update/{id}', 'UserController@update')->name('user.update');
        route::delete('/delete/{id}', 'UserController@destroy')->name('user.delete');
    });
});

