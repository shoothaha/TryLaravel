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
//     return 'Hello World';
// });

// Route::get('about', function(){
// 	return view('page view.about');
// });
// Route::get('/', function(){

// 	$user = ['abc', 'def'];

// 	return view('welcome', compact('user'));
// });

route::get('/', 'tryController@home');

route::get('about', 'tryController@about');

route::get('posts', 'postsController@index');

route::get('upload', 'tryController@upload');