<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Back\ArticleController;
use App\Http\Controllers\Back\AdminController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ArticlePageController;
use App\Http\Controllers\formController;

Route::prefix('dashboard')->name('dashboard.')->middleware('isLogin')->group(function(){
    Route::get('login' , [AdminController::class, 'index'])->name('login.index');
    Route::post('login' , [AdminController::class, 'loginPost'])->name('login.post');
});



Route::prefix('dashboard')->name('dashboard.')->middleware('isAdmin')->group(function() {

    Route::get('articles/deleted' , [ArticleController::class, 'trashed'])->name('articles.trashed');
    Route::get('/' , [DashboardController::class, 'index'])->name('');
    Route::resource('articles' , ArticleController::class);
    Route::get('deletearticle/{id}' , [ArticleController::class, 'delete'])->name('articles.delete');
    Route::get('harddeletearticle/{id}' , [ArticleController::class, 'harddelete'])->name('articles.harddelete');
    Route::get('recoverarticle/{id}' , [ArticleController::class, 'recover'])->name('articles.recover');
    Route::get('switch' , [ArticleController::class, 'switch'])->name('switch');
    
    Route::get('logout' , [AdminController::class, 'logout'])->name('logout');
    Route::resource('forms' , formController::class);
    
});








Route::get('/', function () {
    return view('front/home');
})->name('home');

Route::get('/prices', function () {
    return view('front/prices');
})->name('prices');

Route::get('/library', function () {
    return view('front/library');
})->name('library');

Route::get('/blog' , [BlogController::class, 'index'])->name('blog');
Route::get('/article/{slug}' , [ArticlePageController::class, 'index'])->name('article');




/*Route::get('/dashboard', function () {
    return view('back/dashboard');
})->name('dashboard');

Route::get('/dashboard/article', function () {
    return view('back/article/index');
})->name('dashboard.article.index'); */
