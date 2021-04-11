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

Route::get('/', 'App\Http\Controllers\HomePageController@index')->name('homePage');
Route::get('/danh-sach-san-pham', 'App\Http\Controllers\UserSiteController@productsPage');
Route::get('/danh-sach-san-pham/{productId}', 'App\Http\Controllers\UserSiteController@productDetail');
Route::get('/tin-tuc', 'App\Http\Controllers\UserSiteController@postsPage');
Route::get('/tin-tuc/{postId}', 'App\Http\Controllers\UserSiteController@postDetail');

Route::group(['prefix'=>'admin'], function(){
    Route::get('/home', 'App\Http\Controllers\admin\HomeController@index');

    Route::resource('category', 'App\Http\Controllers\admin\CategoryController')->only([
        'index', 'create', 'store', 'edit', 'update'
    ]);

    Route::resource('image-config', 'App\Http\Controllers\admin\ImageConfigController')->only([
        'index', 'create', 'store', 'edit', 'update'
    ]);
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
