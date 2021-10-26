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
    // return view('layout.conquer');
});

Route::get('menu', function () {
    return view('menu');
});

Route::resource('products', 'ProductController');
Route::post('products/showinfo', 'ProductController@showinfo')->name('product.showinfo');

Route::resource('categories', 'CategoryController');
Route::post('category/showProducts','CategoryController@showProducts')->name('category.showProducts');

Route::get('reports/showcake/{nama_kategori}', 'CategoryController@showcake')->name('reportShowCake');
Route::get('report/rerataharga', 'CategoryController@rerataharga')->name('rerataharga');
Route::get('report/reratajumlahstok', 'CategoryController@reratajumlahstok')->name('reratajumlahstok');
Route::get('report/reratajumlahstokkategori', 'CategoryController@reratajumlahstokkategori')->name('reratajumlahstokkategori');

Route::resource('transactions', 'TransactionController');
Route::post('transactions/showDetailTransaksi','TransactionController@showDetailTransaksi')->name('transaction.showDetailTransaksi');

// route membaca name
// url membaca url asli
Route::get('menu/roti', function () {
    return view('v_roti.list_roti');
});

Route::get('menu/puding', function () {
    return view('v_puding.list_puding');
});

Route::get('menu/roti/{jenis}', function ($jenis) {
    if ($jenis == '') {
        return redirect('menu');
    } else { 
        $harga = 0;
        $desc = "";
        if($jenis == 'coklat'){
            $harga = 15000;
            $desc = "Ini Roti Coklat";
        } else if($jenis == 'tawar'){
            $harga = 10000;
            $desc = "Ini Roti Tawar Enak";
        }
        return view('v_roti.roti', ['jenis' => $jenis, 'harga' => $harga, 'desc' => $desc]);
    }
})->name('roti');

Route::get('menu/puding/{jenis}', function ($jenis) {
    if ($jenis == '') {
        return redirect('menu');
    } else {
        return view('v_puding.puding', ['jenis' => $jenis]);
    }
})->name('puding');
