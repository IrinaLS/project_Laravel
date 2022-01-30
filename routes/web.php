<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsersController;
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

Route::get ('/users', [UsersController::class, 'index'])->name('users.index');
Route::resource('/users', UsersController::class);

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
	Route::view('/', 'admin.index')->name('index');
	Route::resource('/categories', AdminCategoryController::class);
	Route::resource('/news', AdminNewsController::class);
});

Route::group(['prefix' => 'news', 'as' => 'news.'], function() {
	Route::get ('/about', [AboutController::class, 'about'])->name('about');
	Route::get ('/news', [NewsController::class, 'index'])->name('index');	
	Route::get('/news/{id}', [NewsController::class, 'show'])
	->where ('news', '\d+') //имя модели
	->name('show');
	Route::get ('/category', [CategoryController::class, 'category'])->name('category');	
	Route::get('/category/{id}', [NewsController::class, 'oneCategoryNews'])->name('oneCategoryNews');
});	
/*
Route::get('/collection', function() {
	$array = ['Anna', 'Victor', 'Alexey', 'dima', 'ira', 'Vasya', 'olya'];
	$collection = collect($array);
	dd($collection->map(function ($item) {
		return mb_strtoupper($item);
	})->sortKeys());
});*/