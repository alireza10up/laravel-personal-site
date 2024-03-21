<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // TODO Complete it
    return view('home');
})->name('home');

Route::get('/resume', \App\Http\Controllers\ResumeController::class)->name('resume.index');

Route::get('/portfolio', function () {
    // TODO Complete it
    return view('pages.coming-soon');
})->name('portfolio.index');

Route::get('/contact', function () {
    // TODO Complete it
    return view('pages.coming-soon');
})->name('contact.index');

Route::get('/blog', function () {
    // TODO Complete it
    return view('pages.coming-soon');
})->name('blog.index');
