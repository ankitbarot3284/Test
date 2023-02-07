<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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
})->name("index");

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    Route::get("register", 'Auth\RegisterController@show')->name("register.show");
    Route::post("register", 'Auth\RegisterController@register')->name("register.perform");

    Route::get("login", 'Auth\LoginController@show')->name("login.show");
    Route::post("login", 'Auth\LoginController@login')->name("login.perfom");

    Route::get("logout", 'Auth\LogoutController@perfom')->name("logout.perfom");
});

