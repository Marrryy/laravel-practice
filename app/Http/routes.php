<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     // return view('welcome');
//     return '<h1>Hello World!</h1>';
// });

// Route::get('/about', function () {
//     return view('pages.about');
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return "This is user $name with an id of $id";
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');


Route::resource('/posts', 'PostsController');

Route::auth();
// Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('home');

Route::post('cover_image', function(){
  $request->file('cover_image')->move('public/cover_images');
  return back();
});