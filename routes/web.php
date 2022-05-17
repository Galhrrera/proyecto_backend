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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('index');
});

Route::get('/index.html', function(){
    return view('index');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/single', function () {
    return view('single');
});



Route::get('/games', function () {
    return view('games');
})->middleware(['auth'])->name('games');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
Route::get('/register.html', function(){
    return view('register');
});
*/

/*
Route::get('/login.html', function(){
    return view('login');
});
*/

require __DIR__.'/auth.php';
