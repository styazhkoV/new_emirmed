<?php

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
    return view('clinic');
});

Route::get('/sevice', function () {
    return view('sevice');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/job', function () {
    return view('job');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/consult', function () {
    return view('consult');
});
Route::get('/gynicology', function () {
    return view('gynicology');
});
Route::get('/ultrasound', function () {
    return view('ultrasound');
});

