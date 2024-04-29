<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\BlogsController;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::group(['prefix' => 'blog'], function () {
    Route::get('/management', [BlogsController::class, 'render'])->name('blogs.management');
    Route::get('/create', [BlogsController::class, 'createView'])->name('blog.create');
    Route::post('/store', [BlogsController::class, 'store'])->name('blog.store');
});