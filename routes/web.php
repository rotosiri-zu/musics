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

Route::get('/', 'postscontroller@index')->name('top');

Route::resource('posts', 'postsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);
