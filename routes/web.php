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
    return View::make('home.home');
});

Route::get('/', ['as' => 'home', 'uses' => 'FlickrController@search']);
Route::get('/route', ['as' => 'route', 'uses' => 'FlickrController@route']);
Route::get('/about',function () {
    return View::make('about.about');
});
Route::get('/inscription',function () {
    return View::make('inscription.inscription');
});
Route::get('/partners', ['as' => 'partners', 'uses' => 'ImageController@partners']);
//Route::get('flickr/{id}', ['as' => 'flickr.photo', 'uses' => 'FlickrController@show'])->where(['id' => '[0-9]+']);
//Route::get('flickr', ['as' => 'flickr.index', 'uses' => 'FlickrController@index']);
