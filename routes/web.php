<?php

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

// Объявляем маршруты для ресурсного контроллера ProductController,
// назначая слово products префиксом URI
Route::resource('brands', 'BrandsController');

// Т. к. метод remove() не предусмотрен в ресурсных контроллерах,
// объявляем маршрут самостоятельно.
Route::get('brands/{brand}/remove', 'BrandsController@remove')
     ->name('brands.remove');
