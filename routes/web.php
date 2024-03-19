<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // TODO Complete it
    return view('home');
});

Route::get('/resume', function () {
    // TODO Complete it
   return view('coming-soon');
});

Route::get('/portfolio', function () {
    // TODO Complete it
    return view('coming-soon');
});

Route::get('/contact', function () {
    // TODO Complete it
    return view('coming-soon');
});

Route::get('/blog', function () {
    // TODO Complete it
    return view('coming-soon');
});
