<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;

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
    return view('index');
})->name('home');

Route::get('about', function () {
    return view('about');
})->name('about');;

Route::get('rooms', [RoomsController::class, 'rooms'])->name('rooms');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');;

Route::get('dinning', function () {
    return view('dinning');
})->name('dinning');;

Route::get('news', function () {
    return view('news');
})->name('news');;

Route::get('contact', function () {
    return view('contact');
})->name('contact');;
