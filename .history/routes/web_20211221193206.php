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
    return redirect('mypage');
});
//マイページ
use App\Http\Controllers\mypage\MypageController;
Route::middleware(['auth:sanctum', 'verified'])->get('/mypage', [MypageController::class, 'index'])->name('mypage');


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
Route::post('/bookmark', [PostsController::class, 'bookmark'])->middleware('auth');

//トピックス
use App\Http\Controllers\topics\AddTopicsController;
Route::get('/topics', [AddTopicsController::class, 'index'])->name('topics')->middleware('auth');
Route::get('/addtopic', [AddTopicsController::class, 'addtopic'])->name('addtopic')->middleware('auth');
Route::post('/addtopic', [AddTopicsController::class, 'createTopic'])->middleware('auth');
//編集
Route::get('/editotopic/{topicid}', [AddTopicsController::class, 'editotopic'])->name('editotopic')->middleware('auth');
Route::post('/editotopic/{topicid}', [AddTopicsController::class, 'createTopic'])->name('editotopic')->middleware('auth');
//削除
Route::post('/deltopics', [AddTopicsController::class, 'createTopic'])->middleware('auth');


//請求書
use App\Http\Controllers\invoices\invoicesController;
Route::get('/invoices', [invoicesController::class, 'index'])->name('invoices')->middleware('auth');
Route::post('/invoices', [invoicesController::class, 'del'])->name('invoices')->middleware('auth');
Route::get('/addinvoice', [invoicesController::class, 'addinvoices'])->name('addinvoice')->middleware('auth');
Route::post('/addinvoice', [invoicesController::class, 'add'])->name('addinvoice')->middleware('auth');
Route::get('/invoice/{invoiceid}', [invoicesController::class, 'editoinvoices'])->name('addinvoice')->middleware('auth');
Route::post('/invoice/{invoiceid}', [invoicesController::class, 'add'])->name('addinvoice')->middleware('auth');
