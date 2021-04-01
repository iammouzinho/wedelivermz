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
    return view('front.auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/book-deliver', function () {
    return view('front.book');
});

Route::get('/services', function () {
    return view('front.services');
});

Route::get('/program', function () {
    return view('front.program');
});

Route::get('/history', function () {
    return view('front.history');
});

Route::get('/help', function () {
    return view('front.help');
});

Route::get('/stores', function () {
    return view('front.stores');
});

Route::get('/about', function () {
    return view('front.about');
});