<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

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

Route::get ('/', [AboutController::class, 'about']);

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
	Route::resource('/categories', AdminCategoryController::class);
	Route::resource('/news', AdminNewsController::class);
});

Route::get ('/news', [NewsController::class, 'index'])
    ->name('news.index');

Route::get('/news/{title}/{description}/{author}', [NewsController::class, 'show'])
	->where('id', '\d+')
	->name('news.show');

Route::get ('/category', [CategoryController::class, 'category'])
	 ->name('news.category');

Route::get('/news/{category}', [NewsController::class, 'oneCategoryNews'])
	->name('news.oneCategoryNews');
	