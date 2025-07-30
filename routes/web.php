<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




// homecontroller Authentication
Route::get('/register', 'AuthController@register')->name('register');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/store', 'AuthController@store')->name('store');
Route::post('/login_process', 'AuthController@login_process')->name('login_process');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::get('/index','HomeController@index')->name('index');
});
Route::get('/{any?}', function () {
    return view('welcome');
})->where('any', '.*');
