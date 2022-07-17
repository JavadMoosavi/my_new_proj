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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/tracking', function () {
    return view('tracking');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/arvan', function () {
    return view('arvan-upload');
});

Route::get('/fa2a9c558035fa0ff99fb730139c4d78/fefc45a49fcab680195a6d8405e84059/show-result', function () {
    return view('showresult');
});

Route::get('/bcb3a1a3ad19f36fd95f496e5128e7e05137338a45131f8882de49f3eba272905eff2f92077ca53d1f7dab2ccc94dcd0/fefc492077ca53d1f7dab205e84059/administrator', function () {
    return view('admin');
});