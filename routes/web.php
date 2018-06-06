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
    return view('welcome');
});

Auth::routes();

Route::get('/create', 'testing@index')->name('create');
Route::post("store", 'testing@store');
Route::get("/views", 'testing@show');
Route::get("/edit/{c_id}", 'testing@edit');
Route::post("/update", 'testing@update');
Route::get("/delete/{c_id}", 'testing@delete');

