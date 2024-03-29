<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ParserController;
use App\Http\Controllers\Account\IndexController as AccountController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get ('/users', [UsersController::class, 'index'])->name('users.index');
Route::resource('/users', UsersController::class);


Route::group(['middleware' => 'auth'], function() {

	Route::get('/account', AccountController::class)->name('account');
  
	Route::get('/account/logout', function() {
			\Auth::logout();
			return redirect()->route('login');
			})->name('account.logout');

	Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => 'admin'], function() {
			Route::get('/parser', ParserController::class)
			->name('parser');
			Route::view('/', 'admin.index')
			->name('index');
			Route::resource('/categories', AdminCategoryController::class);
			Route::resource('/news', AdminNewsController::class);
			Route::match(['post','get'],'/profile', [ProfileController::class, 'update'])
			->name ('updateProfile');		
	});
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
Route::get ('/session', function (){
	session(['title'=>'name']);
	dd(session()->all());
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'guest', 'prefix' => 'auth', 'as' => 'social.'], function() {
	Route::get('/{network}/redirect', [SocialController::class, 'redirect'])
	     ->name('redirect');

	Route::get('/{network}/callback', [SocialController::class, 'callback'])
		->name('callback');
});