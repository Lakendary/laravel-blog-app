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

//  This is the welcome view that comes standard with a laravel install
// Route::get('/', function () {
//     return view('welcome');
// });

//  Basic route. How to return a string
// Route::get('/hello', function () {
//     // return view('welcome');
//     // return 'Hello, World!';
//     return '<h1>Hello, World!</h1>';
// });


//  Basic route. How to return a view
// Route::get('/about', function(){
//     return view('pages.about');
// });

//  Dynamic route. How to return the variables in the route
// Route::get('/users/{id}/{name}', function($id, $name){
//     return 'This is user '.$name.' with an ID of '.$id;
// });

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
