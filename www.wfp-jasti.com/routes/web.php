<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('supplier/showAjax','SupplierController@showAjax')->name('supplier.showAjax');
Route::post('supplier/editForm/','SupplierController@editForm')->name('supplier.editForm');
Route::post('supplier/editForm2/','SupplierController@editForm2')->name('supplier.editForm2');
Route::post('supplier/saveData','SupplierController@saveData')->name('supplier.saveData');
Route::post('supplier/deleteData','SupplierController@deleteData')->name('supplier.deleteData');

Route::post('product/showMoreProduct','ProductController@showMoreProduct')->name('product.showMoreProduct');
Route::post('product/editModalProductA','ProductController@editModalProductA')->name('product.editModalProductA');
Route::post('product/editModalProductB','ProductController@editModalProductB')->name('product.editModalProductB');
Route::post('product/updateData','ProductController@updateData')->name('product.updateData');
Route::post('product/deleteData','ProductController@deleteData')->name('product.deleteData');

Route::resource('category', 'CategoryController');
Route::resource('supplier', 'SupplierController');
Route::resource('product', 'ProductController');
Route::resource('customer', 'CustomerController');
Route::resource('transaction', 'TransactionController');
Route::get('transaction/displayEachProduct','TransactionController@displayEachProduct')->name('transaction.displayEachProduct');

