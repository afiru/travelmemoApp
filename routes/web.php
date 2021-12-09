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
Route::get('/hello','App\Http\Controllers\HelloController@index');
Route::get('/posts', 'App\Http\Controllers\post\PostsController@index')->middleware('auth');
Route::post('/posts', 'App\Http\Controllers\post\PostsController@delPost')->middleware('auth');
//新規投稿
Route::get('/addpost', [PostsController::class, 'addPost'])->name('addpost')->middleware('auth');
Route::post('/addpost',[PostsController::class, 'create'])->middleware('auth');
//編集
Route::get('/post/{postid}', [PostsController::class, 'editPost'])->name('editpost')->middleware('auth');
Route::post('/post/{postid}', [PostsController::class, 'updatePost'])->name('editpost')->middleware('auth');
//いいね処理
Route::post('/bookmark', [PostsController::class, 'bookmark'])->middleware('auth');

//トピックス


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
