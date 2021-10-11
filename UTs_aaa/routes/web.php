<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/listofbooks','BookController@index');
Route::get('/academicbook','BookController@academicBook');
Route::get('/master_category','ClassificationController@index');
Route::get('/report/comics/request','BookController@comicRequest');
