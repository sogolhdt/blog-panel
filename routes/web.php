<?php

use App\Livewire\BlogManagement;
use App\Livewire\CreateBlog;
use App\Livewire\Home;
use App\Livewire\EditBlog;
use App\Livewire\ShowBlog;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard1');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';

Route::get('/home', Home::class)->name('dashboard');
Route::get('/manage', BlogManagement::class);
Route::get('/create', CreateBlog::class);
Route::get('/show/{blogId}', ShowBlog::class);
Route::get('/edit/{blogId}', EditBlog::class);
