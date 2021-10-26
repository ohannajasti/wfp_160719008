<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryEloquent = Category::all();  
        $data_kategori = DB::table('products as p')
                        ->join('categories as c', 'c.id', '=', 'p.category_id')
                        ->groupBy('p.category_id', 'c.nama_kategori')
                        ->select('p.category_id', 'c.nama_kategori', DB::raw('count(c.id) as jml'))
                        ->get();
        $agg_data_kategori = DB::table('products as p')
                        ->join('categories as c', 'c.id', '=', 'p.category_id')
                        ->groupBy('p.category_id', 'c.nama_kategori')
                        ->select('p.category_id')
                        ->select('c.nama_kategori')
                        ->select(DB::raw('count(c.id) as jml'))
                        ->get();
                        //kategori
        $sub_data_kategori = DB::table('categories as c')
                        ->select('c.*'
                            , DB::raw("(SELECT max(harga_jual) FROM products p WHERE p.category_id=c.id) as harga_tertinggi")
                            , DB::raw("(SELECT avg(harga_jual) FROM products p) as rerata")
                        )
                        // ->addSelect(DB::raw("(SELECT avg(harga_jual) FROM products p) as rerata"))
                        ->addSelect([
                            'rerata' => function ($query) {
                                $query->from('products')->selectRaw('avg(harga_jual)');
                            }
                        ])
                        ->get();
        // dd($sub_data_kategori);

        return view('category.index', ['data_category' => $queryEloquent] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showcake($nama_kategori)
    {
        $q_test = "SELECT * 
        FROM categories as c inner join products as p 
            on c.id=p.category_id
        where c.nama_kategori = 'donut'";

        $cek_kategori = DB::table('categories')
                        ->where('nama_kategori', $nama_kategori)
                        ->count();
        if($cek_kategori <= 0){
            echo "Kategori tidak ditemukan";
        } else { 
            // $report_kategori = DB::table('categories as c')
            //             ->join('products as p', 'c.id', '=', 'p.category_id')
            //             ->where('c.nama_kategori', $nama_kategori)
            //             ->get();
            // $jml_produk_all = DB::table('products')->count();

            $report_kategori = Category::where('nama_kategori', $nama_kategori)->first();
            $jml_produk_all = Product::count(); 
            return view('category.showcake', compact('report_kategori', 'nama_kategori', 'jml_produk_all'));
        }
    }

    public function rerataharga()
    {
        $q="SELECT c.id, c.nama_kategori, avg(p.harga_jual) as rerata
        FROM categories as c left join products as p 
            on c.id=p.category_id
        GROUP BY c.id, c.nama_kategori";

        $data_rerata = DB::table('categories as c')
                    ->leftJoin('products as p', 'c.id', '=', 'p.category_id')
                    ->select('c.id', 'c.nama_kategori')
                    ->selectRaw("avg(p.harga_jual) as rerata")
                    ->groupBy('c.id', 'c.nama_kategori')
                    ->get();

        return view('category.rerata', compact('data_rerata'));
    }

    public function reratajumlahstok()
    {
        $q="SELECT s.name, round(avg(p.stok),2)
        FROM `suppliers` as s left join products as p 
            on s.id=p.supplier_id
        group by s.name";

        $data_rerata = DB::table('suppliers as s')
                    ->leftJoin('products as p', 's.id', '=', 'p.supplier_id')
                    ->select('s.id', 's.name')
                    ->selectRaw("round(avg(p.stok),2) as rerata")
                    ->groupBy('s.id', 's.name')
                    ->get();

        return view('category.reratajumlahstok', compact('data_rerata'));
    }

    public function reratajumlahstokkategori()
    {
        $q="SELECT c.id, c.nama_kategori, sum(p.stok) as rerata
        FROM categories as c left join products as p 
            on c.id=p.category_id
        GROUP BY c.id, c.nama_kategori";

        $data_rerata = DB::table('categories as c')
                    ->leftJoin('products as p', 'c.id', '=', 'p.category_id')
                    ->select('c.id', 'c.nama_kategori')
                    ->selectRaw("sum(p.stok) as jumlah")
                    ->groupBy('c.id', 'c.nama_kategori')
                    ->get(); 
        return view('category.reratajumlahstokkategori', compact('data_rerata'));
    }

    public function showProducts(Request $request)
    {
        $nama = $request->nama;
        $id_kategori = $request->id_kategori;
        $data = Category::where('id', $id_kategori)->first();
        
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('category.showProducts', compact('data'))->render()
        ),200);  
    }
}
