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
    return View::make('galeria.galeria');
});

Route::get('/galeria', ['as' => 'galeria', 'uses' => 'FlickrController@search']);
Route::get('/ibilbidea', ['as' => 'route', 'uses' => 'FlickrController@route']);
Route::get('/',function () {
    return View::make('about.about');
});
Route::get('/izen-ematea',function () {
    return View::make('inscription.inscription');
});
Route::get('/sailkapena',function () {
    return View::make('clasification.clasification');
});
Route::get('/kontaktua',function () {
    return View::make('contact.contact');
});
Route::post('/kontaktua',['as' => 'contact','uses' => 'Contact\ContactController@store']);
Route::get('/babesleak', ['as' => 'partners', 'uses' => 'ImageController@partners']);
Route::get('/sailkapena', 'ClasificationController@index');
Route::get('/sailkapena/getData','ClasificationController@getClasification')->name('sailkapena/getData');
//Route::get('flickr/{id}', ['as' => 'flickr.photo', 'uses' => 'FlickrController@show'])->where(['id' => '[0-9]+']);
//Route::get('flickr', ['as' => 'flickr.index', 'uses' => 'FlickrController@index']);
