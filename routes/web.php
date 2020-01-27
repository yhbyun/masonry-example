<?php

use App\Image;

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
    $images = Image::paginate(10);

    return view('welcome', compact('images'));
});

Route::get('/page/2', function () {
    return view('welcome2');
});

Route::get('/page/3', function () {
    return view('welcome3');
});
