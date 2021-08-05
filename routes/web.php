<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;




//public routes
Route::get('/index', [AppController::class, 'index'])->name('index');
Route::get('/posts', [AppController::class, 'posts'])->name('posts');
Route::get('/why-us', [AppController::class, 'whyus'])->name('whyus');
Route::get('/about-us', [AppController::class, 'about'])->name('about');

Route::get('/post/{id}', function () {
    return view('pages.post');
});
Route::get('/contact-us', function () {
    return view('pages.contact');
});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
