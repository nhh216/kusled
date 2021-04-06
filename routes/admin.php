<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'App\Http\Controllers\admin\HomeController@index');

Route::resource('category', 'App\Http\Controllers\admin\CategoryController')->only([
    'index', 'create', 'store', 'edit', 'update'
]);

Route::group(['prefix'=>'category'], function(){
    Route::get('test', 'App\Http\Controllers\admin\CategoryController@test')->name('category.test');
});
