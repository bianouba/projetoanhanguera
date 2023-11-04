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

Route::get('/', function () {
    return view('principal');
});

Route::get('/paginaa', function () {
    return view('paginaa');
});

Route::get('/paginab', function () {
    return view('paginab');
});

Route::get('/paginac', function () {
    return view('paginac');
});

Route::get('/paginad', function () {
    return view('paginad');
});