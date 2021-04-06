<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'App\Http\Controllers\admin\HomeController@index')->name('home');

Route::resource('category', 'App\Http\Controllers\admin\CategoryController')->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);
Route::group(['prefix'=>'category'], function(){
    Route::get('{id}/delete', 'App\Http\Controllers\admin\CategoryController@delete')->name('category.delete');
});
