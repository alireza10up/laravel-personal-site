<?php

use App\Http\Controllers\BlogController;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

Route::get('/resume', \App\Http\Controllers\ResumeController::class)->name('resume.index');

Route::get('/portfolio', function () {
    // TODO Complete it
    return view('pages.coming-soon');
})->name('portfolio.index');

Route::get('/contact', function () {
    // TODO Complete it
    return view('pages.coming-soon');
})->name('contact.index');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'single'])->name('blog.single');
