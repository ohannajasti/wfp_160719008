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
    // echo "Jasti";
});

Route::get('/greeting/{nama?}', function($nama='Semua'){
    return view('welcome',['nama'=>$nama]);
})->name('showGreeting');

Route::get('/helloworld', function () {
    return 'Hello World, my friend';
    // echo "Jasti";
});

Route::view('/selamatdatang','welcome');

Route::get('/user/{nama?}', function($nama='Jasti'){
    return 'User:'.$nama;
})->name('showMhs');

//tugas week 2
Route::view('/menu','menu');

