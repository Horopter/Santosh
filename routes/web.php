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


//Others

Route::get('blog/{slug}',['as' => 'slug.single','uses' => 'SlugController@getSingle'])->where('slug','[\w\d\-\_]+');

Route::get('blog',['uses' => 'SlugController@getIndex', 'as' => 'slug.index']);

Route::get('/', 'PagesController@getIndex');

Route::get('about', 'PagesController@getAbout');

Route::get('contact', 'PagesController@getContact');

Route::resource('posts','PostController');

Auth::routes();
