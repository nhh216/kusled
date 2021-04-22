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

//attribute
Route::resource('attribute', 'App\Http\Controllers\admin\AttributeController')->only([
    'index', 'create', 'store', 'edit', 'update'
]);
Route::group(['prefix'=>'attribute'], function(){
    Route::get('{id}/delete', 'App\Http\Controllers\admin\AttributeController@delete')->name('attribute.delete');
});

//post
Route::resource('post', 'App\Http\Controllers\admin\PostController')->only([
    'index', 'create', 'store', 'edit', 'update'
]);
Route::group(['prefix'=>'post'], function(){
    Route::get('{id}/delete', 'App\Http\Controllers\admin\PostController@delete')->name('post.delete');
});

//brand
Route::resource('brand', 'App\Http\Controllers\admin\BrandController')->only([
    'index', 'create', 'store', 'edit', 'update'
]);
Route::group(['prefix'=>'brand'], function(){
    Route::get('{id}/delete', 'App\Http\Controllers\admin\BrandController@delete')->name('brand.delete');
});

Route::get('/footer-config', 'App\Http\Controllers\admin\FooterConfigController@create')->name('footer_config.create');
Route::post('/footer-config', 'App\Http\Controllers\admin\FooterConfigController@store')->name('footer_config.store');
