<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('/home')->name('home');
// });


Route::view('/', 'home')->name('home');