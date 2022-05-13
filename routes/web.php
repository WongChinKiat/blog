<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
})->name('welcome');
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
// Route::get('/post', [PostController::class,'index'])->name('post');
// Route::get('/create', [PostController::class,'index'])->name('post');

// Route::get('/create', 'AboutController@create');

//Route::get('/posts', [PostController::class,'index'])->name('posts.index');
//Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
//Route::get('/posts', [PostController::class,'store'])->name('posts.store');
//Route::get('/posts/{post}', [PostController::class,'show'])->name('posts.show');
//Route::get('/posts/{post}/edit', [PostController::class,'edit'])->name('posts.edit');
//Route::get('/posts/{post}', [PostController::class,'update'])->name('posts.update');
//Route::get('/posts/{post}', [PostController::class,'destory'])->name('posts.destory');

Route::resource('posts', PostController::class);
//Route::get('/create', 'AboutController@create');
//Route::get('/about', [AboutController::class,'index']);
    