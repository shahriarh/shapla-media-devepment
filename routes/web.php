<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();
Route::get('/home', [App\Http\Controllers\FrontendController::class, 'index'])->name('frontend.home');

Route::get('/abouts', [App\Http\Controllers\FrontendController::class, 'about'])->name('frontend.about');
Route::get('/contact', [App\Http\Controllers\FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/media/{id}', [App\Http\Controllers\FrontendController::class, 'view'])->name('frontend.view');
Route::get('/media', [App\Http\Controllers\FrontendController::class, 'media'])->name('frontend.media');
Route::get('/allmedia', [App\Http\Controllers\FrontendController::class, 'allmovie'])->name('frontend.allmovie');
//Route::get('/business-division/view/{id}','BusinessDivisionController@view')

//Route::get('/home', [App\Http\Controllers\FrontendController::class, 'banner'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
Route::get('/category/add', [App\Http\Controllers\CategoryController::class, 'add'])->name('category.add');
Route::post('/category/add', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');

Route::get('/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/edit/{id}', [App\Http\Controllers\CategoryController::class, 'editSubmit']);
Route::post('/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete']);


Route::get('/banner', [App\Http\Controllers\BannerController::class, 'index'])->name('banner.index');
Route::get('/banner/add', [App\Http\Controllers\BannerController::class, 'add'])->name('banner.add');
Route::post('/banner/add', [App\Http\Controllers\BannerController::class, 'store'])->name('banner.store');

Route::get('/banner/edit/{id}', [App\Http\Controllers\BannerController::class, 'edit'])->name('banner.edit');
Route::post('/banner/edit/{id}', [App\Http\Controllers\BannerController::class, 'editSubmit']);
Route::post('/banner/delete/{id}', [App\Http\Controllers\BannerController::class, 'delete']);

Route::get('/movie', [App\Http\Controllers\MovieController::class, 'index'])->name('movie.index');
Route::get('/movie/add', [App\Http\Controllers\MovieController::class, 'add'])->name('movie.add');
Route::post('/movie/add', [App\Http\Controllers\MovieController::class, 'store'])->name('movie.store');

Route::get('/movie/edit/{id}', [App\Http\Controllers\MovieController::class, 'edit'])->name('movie.edit');
Route::post('/movie/edit/{id}', [App\Http\Controllers\MovieController::class, 'editSubmit']);
Route::post('/movie/delete/{id}', [App\Http\Controllers\MovieController::class, 'delete']);

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
Route::get('/about/add', [App\Http\Controllers\AboutController::class, 'add'])->name('about.add');
Route::post('/about/add', [App\Http\Controllers\AboutController::class, 'store'])->name('about.store');

Route::get('/about/edit/{id}', [App\Http\Controllers\AboutController::class, 'edit'])->name('about.edit');
Route::post('/about/edit/{id}', [App\Http\Controllers\AboutController::class, 'editSubmit']);
Route::post('/about/delete/{id}', [App\Http\Controllers\AboutController::class, 'delete']);

// Route::get('/company', 'CompanyController@show');
// Route::get('/company/view/{id}', 'CompanyController@view');
// Route::get('/company/add', 'CompanyController@add');
// Route::post('/company/add', 'CompanyController@addSubmit');
// Route::get('/company/edit/{id}', 'CompanyController@edit');
// Route::post('/company/edit/{id}', 'CompanyController@editSubmit');
