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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Home\IndexController@index');

Route::group(['middleware' => ['admin']], function () {
    Route::resource('article', 'Admin\ArticlesController');
});

Auth::routes();

Route::get('/blogadmin', 'HomeController@index')->name('home');
