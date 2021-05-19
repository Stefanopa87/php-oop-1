<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TestController@home') -> name('home');

// esercizio 18 may
Route::get('/movie', 'ControllerMovie@pag1') -> name('movie');

// pag test prova
Route::get('/movie2', 'ControllerMovie@pag2') -> name('movie2');