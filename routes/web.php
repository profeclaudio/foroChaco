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

Route::get('/','PagesController@home');
Route::get('/quienes','PagesController@quienes')->name('quienes');
Route::get('/quehacemos','PagesController@que')->name('que');
Route::get('/autoridades','PagesController@autoridades')->name('autoridades');
Route::get('/noticia/{publication}','PagesController@singleNew')->name('noticia');
Route::get('/contacto','PagesController@contacto')->name('contacto');



Route::get('/access','PagesController@access');

Auth::routes();
Route::get('/publication/create','PagesController@create')->middleware('auth')->name('publicationCreate');
Route::get('/publication/edit/{publication}','HomeController@editGetPublication')->middleware('auth');
Route::post('/publication/edit','HomeController@editPostPublication')->middleware('auth');

Route::post('/publication/create','HomeController@createPublication')->middleware('auth')->name('publicationCreatePost');
Route::get('/home', 'HomeController@index')->name('home');
