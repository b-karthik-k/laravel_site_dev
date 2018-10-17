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

// Route::get('/hello', function () {
//     //return view('pages.about');
//     return "<h2>HEllo workld </h2>";
// });

// Route::get('/user/{id}/{name}', function ($id,$name) {
//     // return view('pages.about');
//     return "this is the user id".$id."and".$name;

// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('post','PostController');
// Route::get('/about', function () {
//     return view('pages.about');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
