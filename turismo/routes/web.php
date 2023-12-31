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
    return view('pages.index');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/voos', function () {
    return view('pages.voos');
});

Route::get('/hoteis', function () {
    return view('pages.hoteis');
});

Route::get('/atividades', function () {
    return view('pages.atividades');
});
