<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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
    return view('welcome');
});

Route::get('/post',[PostController::class,'index'])->name('post.index');
Route::get('/post/create',[PostController::class,'create'])->name('post.create');
Route::post('/post',[PostController::class,'store'])->name('post.store');
Route::get('/post/{post}/',[PostController::class,'edit'])->name('post.edit');
Route::put('/post/{post}/update',[PostController::class,'update'])->name('post.update');
Route::delete('/post/{post}/destroy',[PostController::class,'destroy'])->name('post.destroy');