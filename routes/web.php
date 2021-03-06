<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/article', [ArticleController::class,'index'])->name('article');

Route::get('/contact', [ContactController ::class,'index'])->name('contact');


Route::get('/back', [BackController ::class,'index'])->name('back');
Route::get('/HomeListe2', [BackController ::class,'index2'])->name('HomeListe2');
Route::get('/bArticle', [BackController ::class,'index3'])->name('bArticle');

Route::post('/ajouter', [BackController ::class,'store']);
Route::post('/ajouter2', [BackController ::class,'store2']);
Route::post('/ajouterArticle', [BackController ::class,'storeArticle']);

// delet H1
Route::post('/delete1/{id}',[BackController ::class,'destroy1']);

// delet Article
Route::post('/deleteArticle/{id}',[BackController ::class,'destroyArticle']);

// show H1
Route::get('/liste-show/{id}',[BackController ::class,'show']);


// show article
Route::get('/article-show/{id}',[BackController ::class,'showArticle']);
Route::post('/delete2/{id}',[BackController ::class,'destroy']);
