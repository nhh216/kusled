<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'App\Http\Controllers\admin\HomeController@index')->name('home');

//category
Route::resource('category', 'App\Http\Controllers\admin\CategoryController')->only([
    'index', 'create', 'store', 'edit', 'update'
]);
Route::group(['prefix'=>'category'], function(){
    Route::get('{id}/delete', 'App\Http\Controllers\admin\CategoryController@delete')->name('category.delete');
});

//product
Route::resource('product', 'App\Http\Controllers\admin\ProductController')->only([
    'index', 'create', 'store', 'edit', 'update'
]);
Route::group(['prefix'=>'product'], function(){
    Route::get('{id}/delete', 'App\Http\Controllers\admin\ProductController@delete')->name('product.delete');
});
