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

Route::get('/', 'HomeController@index')->name('home');

Route::post('logout', 'UserController@logout')->name('logout');

Route::resources([
    'user'=>UserController::class,
    'category'=>CategoryController::class,
    'customer'=>CustomerController::class,
    'product'=>ProductController::class,
    'order'=>OrderController::class
]);
