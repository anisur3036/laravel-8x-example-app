<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/{post:uuid}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{post:uuid}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/posts/update/{post:uuid}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{post:uuid}/delete', [PostController::class, 'delete'])->name('post.delete');
