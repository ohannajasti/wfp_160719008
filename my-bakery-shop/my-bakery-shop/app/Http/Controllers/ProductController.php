<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Categorie;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Query RAW
        // $queryRaw = DB::select(DB::raw(" SELECT * 
        //                     FROM products 
        //                     inner join categories on product.category_id=categories.id "));

        // Query Builder
        $queryBuilder = DB::table('products as p')
                        ->join('categories as c', 'c.id', '=', 'p.category_id')
                        ->orderBy('c.nama_kategori', 'asc')
                        ->orderBy('p.harga_jual', 'desc')
                        ->select('p.nama_produk', 'c.nama_kategori')
                        ->get(); 
        // dd($queryBuilder);
        
        // Query Eloquent
        $data_product = Product::where('harga_jual', '>=', 6100)
                            ->where('nama_produk', 'like', 'R%')
                            ->orWhere('nama_produk', 'like', 'D%')
                            ->orderBy('nama_produk', 'desc')
                            ->get();
                            
        $jumlah_produk = Product::count();
        $jumlah_produk = DB::table('products')->count();
        $harga_tertinggi = DB::table('products')->max('harga_jual');
        $harga_rerata = DB::table('products')->avg('harga_jual');

        // cara 1, mengambil nilai rata2 terlebih dahulu diatas
        $data_product_diatasrata = Product::orderBy('nama_produk', 'desc')
                            ->where('harga_jual', '>=', $harga_rerata)
                            ->get();
        
        // cara 2, subquery di where dengan function
        $data_product_diatasrata = Product::orderBy('nama_produk', 'desc')
                            ->where('harga_jual', '>=', 
                                    function ($query) {
                                        $query->from('products')->selectRaw('avg(harga_jual)');
                                    }
                            )
                            ->get();
                            
        // cara 3, subquery di where dengan model
        $data_product_diatasrata = Product::orderBy('nama_produk', 'desc')
                            ->where('harga_jual', '>=', Product::avg('harga_jual'))
                            ->get();
        
        // cara 4, subquery di where dengan DB raw
        $data_product_diatasrata = Product::orderBy('nama_produk', 'desc')
                            ->where('harga_jual', '>=', DB::raw("(SELECT avg(harga_jual) FROM products)"))
                            ->get();
        // dd($harga_rerata);
        // yg dikenali di blade adalah penamaannya
        return view('product.index', compact('data_product'
                                , 'jumlah_produk'
                                , 'harga_tertinggi'
                                , 'harga_rerata'
                                , 'data_product_diatasrata'));
        // return view('product.index', ['data_product' => $queryEloquent
        //                     , 'jumlah_produk' => $jumlah_produk
        //                     , 'harga_tertinggi' => $harga_tertinggi
        //                     , 'harga_rerata' => $harga_rerata
        //                 ] );

        // echo 'testing, ini function index di ProductController';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function showinfo(Request $request)
    {   
        // $res = "<div class='alert alert-info'>
        //      Did you know? <br>This message is sent by a Controller.'</div>";
        // return $res;
        $produk_termahal = Product::orderBy('harga_jual', 'desc')
                                    ->first();

        return response()->json(array(
            'status'=>'oke',
            'msg'=>"<div class='alert alert-info'>
                     Produk termahal adalah ".$produk_termahal->nama_produk." dengan harga = ". $produk_termahal->harga_jual ."</div>"
        ),200);     
    }
}
