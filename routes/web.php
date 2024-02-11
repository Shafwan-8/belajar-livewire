<?php

use App\Livewire\Posts\Create;
use Illuminate\Support\Facades\Route;
use App\Livewire\Posts\Index;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//posts index
Route::get('/', Index::class)->name('posts.index');

//posts create
Route::get('/create', Create::class)->name('posts.create');

//posts edit
Route::get('/edit/{id}', App\Livewire\Posts\Edit::class)->name('posts.edit');