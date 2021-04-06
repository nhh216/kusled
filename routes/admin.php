<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'App\Http\Controllers\admin\HomeController@index');

Route::resource('category', 'App\Http\Controllers\admin\CategoryController')->only([
    'index', 'create', 'store', 'edit', 'update'
]);
