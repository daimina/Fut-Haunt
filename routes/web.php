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

Route::get('/', function(){
    return view('welcome');
});

Route::get("/top", "FutController@index")->name('top');
Route::get('/PL', 'FutController@PL')->name('Fut.PL'); 
Route::get('/liga', 'FutController@liga')->name('Fut.laliga'); 
Route::get('/serie', 'FutController@serie')->name('Fut.serie'); 
Route::get('/bundes', 'FutController@bundes')->name('Fut.bundes'); 
Route::post('/{league}/create', 'FutController@create');
Route::get("/{league}/{datum_id}/edit", "FutController@edit")->name('edit');
Route::any("/{league}/{datum_id}/update", "FutController@update")->name('update');
Route::get("/{league}/{datum_id}/delete", "FutController@delete")->name('delete');
Route::get("/serie/score", "FutApiController@score")->name('score_serie');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
