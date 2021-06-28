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
});

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/KreativMorePage', 'HomeController@kreativ');
Route::get('/Karir', 'HomeController@karir');
Route::get('/Undercon', 'HomeController@undercon');

Route::resource('reachus', 'ReachusController');
