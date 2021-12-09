<?php

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
    return redirect('/dashboard');
});
use App\Http\Controllers\post\PostsController;
Route::get('/posts', [PostsController::class, 'index'])->name('posts')->middleware('auth');
Route::post('/posts', [PostsController::class, 'delPost'])->middleware('auth');
//新規投稿
Route::get('/addpost', [PostsController::class, 'addPost'])->name('addpost')->middleware('auth');
Route::post('/addpost',[PostsController::class, 'create'])->middleware('auth');
//編集
Route::get('/post/{postid}', [PostsController::class, 'editPost'])->name('editpost')->middleware('auth');
Route::post('/post/{postid}', [PostsController::class, 'updatePost'])->name('editpost')->middleware('auth');
//いいね処理
Route::post('/post/bookmarking', [PostsController::class, 'updateBookings'])->middleware('auth');
//Rest
use App\Http\Controllers\post\RstPost;
Route::resource('rest', 'App\Http\Controllers\post\RstPost');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
