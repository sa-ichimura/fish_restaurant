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

Route::get('/', 'FoodController@index');
Route::get('/category', 'FoodCategoeyController@index')->name('category.index');
Route::get('/component', 'FoodComponentController@index')->name('component.index');
Route::post('/component/comparison', 'FoodComponentController@comparison')->name('component.comparison');
Route::get('/comparison', 'ComparisonController@index')->name('comparison.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
