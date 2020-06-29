<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('add/category','CategoryController@AddCategory')->name('category');
Route::post('add/category/post','CategoryController@AddCategoryPost')->name('AddCategoryPost');
Route::post('category/delete/{id}','CategoryController@CategoryDelete')->name('CategoryDelete');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
