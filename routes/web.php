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
    return view('home');
});

Auth::routes();


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/workouts', 'WorkoutsController@index')->name('workouts');
Route::get('/social', 'SocialController@index')->name('social');
Route::get('/account', 'AccountController@index')->name('account');

