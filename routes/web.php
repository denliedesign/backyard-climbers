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

Route::get('best-kids-climbing-dome', function () {
    return view('best-kids-climbing-dome');
});

Route::get('best-kid-foam-mats', function () {
    return view('best-kid-foam-mats');
});

Route::get('best-montessori-climber', function () {
    return view('best-montessori-climber');
});

Route::get('best-slide-and-swing-play-set', function () {
    return view('best-slide-and-swing-play-set');
});

Route::get('best-kid-climber', function () {
    return view('best-kid-climber');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
